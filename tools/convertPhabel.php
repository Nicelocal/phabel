<?php

use Phabel\Cli\EventHandler;
use Phabel\Target\Php;
use Phabel\Traverser;

if (!\file_exists('composer.json')) {
    echo "This script must be run from package root" . PHP_EOL;
    die(1);
}
require 'vendor/autoload.php';
require 'ci/functions.php';
if ($argc < 2) {
    $help = <<<EOF
Usage: {$argv[0]} target [ dry ]

target - Target version
dry - 0 or 1, whether to dry-run conversion

EOF;
    echo $help;
    die(1);
}
$target = $argv[1];
$dry = (bool) ($argv[2] ?? '');
$branch = 'master';
$tag = \getenv('shouldTag') ?: null;

$home = \realpath(__DIR__.'/../');
r("rm -rf ../phabelConvertedInput");
\mkdir('../phabelConvertedInput');

if (!$dry) {
    r("rm -rf ../phabelConvertedRepo");
    r("cp -a $home ../phabelConvertedRepo");
    r("rm -rf ../phabelConvertedRepo/vendor");
}

function commit(string $message)
{
    r("cp -a ../phabelConvertedOutput/* ../phabelConvertedRepo");
    \chdir("../phabelConvertedRepo/");
    r("git add -A");
    r("git commit -m " . \escapeshellarg($message));
}

foreach ($target === 'all' ? Php::VERSIONS : [$target] as $realTarget) {
    $realTarget = Php::normalizeVersion($realTarget);
    if (!$dry) {
        \chdir("../phabelConvertedRepo");
        \passthru("git branch -D phabel_tmp");
        r("git branch phabel_tmp");
        r("git checkout phabel_tmp");
        r("rm -rf ../phabelConvertedRepo/*");
    }
    r("rm -rf ../phabelConvertedOutput");
    \mkdir('../phabelConvertedOutput');

    $coverage = \getenv('PHABEL_COVERAGE') ?: '';
    if ($coverage) {
        $coverage .= "-{$realTarget}";
    }
    $packages = (new Traverser(EventHandler::create()))
        ->setInput('../phabelConvertedOutput')
        ->setOutput('../phabelConvertedOutput')
        ->setPlugins([Php::class => ['target' => $realTarget]])
        ->setCoverage($coverage)
        ->run((int) (\getenv('PHABEL_PARALLEL') ?: 1));

    \chdir($home);
    r("cp -a * .php-cs-fixer.dist.php ../phabelConvertedInput");
    \chdir("../phabelConvertedInput");
    r("rm -rf vendor-bin/*/vendor");
    if (!empty($packages)) {
        $cmd = "composer require -n ";
        foreach ($packages as $package => $constraint) {
            if ($package === 'php') {
                continue;
            }
            $cmd .= \escapeshellarg("{$package}:{$constraint}")." ";
        }
        r($cmd);
    }
    r("composer update --no-dev");
    r("rm -rf tests testsGenerated");

    foreach ([Php::VERSIONS[\count(Php::VERSIONS)-1], $realTarget] as $k => $target) {
        if ($k === 0) {
            $input = "../phabelConvertedInput";
            $output = "../phabelConvertedOutput";
        } else {
            $input = $output = "../phabelConvertedOutput";
        }
        \chdir($input);

        $coverage = \getenv('PHABEL_COVERAGE') ?: '';
        if ($coverage) {
            $coverage .= "-{$target}";
        }
        (new Traverser(EventHandler::create()))
            ->setInput($input)
            ->setOutput($output)
            ->setPlugins([Php::class => ['target' => $target]])
            ->setCoverage($coverage)
            ->run((int) (\getenv('PHABEL_PARALLEL') ?: 1));

        \chdir($output);
        r("$home/vendor/bin/php-cs-fixer fix");

        if (!$dry) {
            commit("phabel.io: transpile to {$target}");
        }
    }
    \chdir($home);
    r("cp -a testsGenerated tests ../phabelConvertedOutput");
    \chdir("../phabelConvertedOutput");
    r("$home/vendor/bin/php-scoper add-prefix -c $home/scoper.inc.php");
    r("rm -rf vendor");
    r("cp -a build/. .");
    r("rm -rf build vendor/composer vendor/autoload.php vendor/scoper-autoload.php vendor/bin");
    \rename("vendor", "vendor-bundle");
    r("find src -type f -exec sed 's/\\\\Phabel\\\\self/self/g' -i {} +");

    \file_put_contents('vendor-bundle/autoload.php', <<<PHP
        <?php
        if (file_exists(__DIR__.'/../vendor/autoload.php')) return require __DIR__.'/../vendor/autoload.php';
        return require __DIR__.'/../../../autoload.php';
    PHP);

    $lock = \json_decode(\file_get_contents('composer.lock'), true);
    $json = \json_decode(\file_get_contents('composer.json'), true);

    $json['require'] = [
        'php' => $packages['php'],
        'ext-json' => $json['require']['ext-json'],
        'composer-plugin-api' => $json['require']['composer-plugin-api'],
    ];

    foreach ($lock['packages'] as $package) {
        $name = $package['name'];

        if ($name === 'phabel/phabel') {
            continue;
        }

        $json['require'] += \array_filter($package['require'], fn ($s) => \str_starts_with($s, 'ext-'), ARRAY_FILTER_USE_KEY);

        foreach (['psr-4', 'psr-0'] as $type) {
            foreach ($package['autoload'][$type] ?? [] as $namespace => $path) {
                $namespace = "Phabel\\$namespace";
                $paths = \is_string($path) ? [$path] : $path;
                $paths = \array_map(fn ($path) => "vendor-bundle/$name/$path", $paths);
                $json['autoload'][$type][$namespace] = $paths;
            }
        }

        $json['autoload']['files'] = \array_merge(
            $json['autoload']['files'] ?? [],
            \array_map(
                fn ($path) => "vendor-bundle/$name/$path",
                $package['autoload']['files'] ?? []
            )
        );
    }
    $json['autoload-dev'] = ['psr-4' => ['PhabelTest\\' => 'tests/']];

    \file_put_contents('composer.json', \json_encode($json, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES));

    if (!$dry) {
        commit("phabel.io: add dependencies");
        \chdir("../phabelConvertedRepo");
        if ($tag) {
            r("git tag ".\escapeshellarg("$tag.$target"));
            r("git push -f origin " . \escapeshellarg("$tag.$target"));
        }
        r("git push -f origin " . \escapeshellarg("phabel_tmp:{$branch}-{$target}"));
        r("git checkout " . \escapeshellarg($branch));
        r("git branch -D phabel_tmp");
    }
}
