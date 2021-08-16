<?php

use Amp\Parallel\Worker\DefaultPool;
use Composer\Util\Filesystem;
use Phabel\Plugin\PhabelTestGenerator;
use Phabel\Plugin\TypeHintReplacer;
use Phabel\Target\Php;
use Phabel\Traverser;
use SebastianBergmann\CodeCoverage\Driver\Selector;
use SebastianBergmann\CodeCoverage\Filter;

use function Amp\Parallel\Worker\pool;
use function Amp\Promise\all;
use function Amp\Promise\wait;

require_once 'vendor/autoload.php';

$canCoverage = false;
try {
    $filter = new Filter;
    $filter->includeDirectory(\realpath(__DIR__.'/../src'));
    (new Selector)->forLineCoverage($filter);
    $canCoverage = true;
} catch (\Throwable $e) {
}

if ($canCoverage) {
    pool(new DefaultPool(\getenv('CI') ? 3 : \count(Php::VERSIONS) + 2));
}

$fs = new Filesystem();

const BASE = \PhabelTest\Target\TypeHintReplacerTest::class;

$packages = [];
$packagesSecondary = [];
foreach (Php::VERSIONS as $version) {
    $types = [
        'callable', 'iterable', 'object', 'self', 'static',
        'int', 'float', 'array', 'string', 'bool',
        \Generator::class,
        \str_replace("Target", "Target$version", \PhabelTest\Target\TypeHintReplacerTest::class),
    ];
    foreach (\glob("testsGenerated/Target/TypeHintReplacer*") as $test) {
        \preg_match("~(TypeHintReplacer\d+Test)~", $test, $matches);
        $types []= BASE;
        $types []= $r = \str_replace("TypeHintReplacerTest", $matches[1], BASE);
        $types []= \str_replace("Target", "Target$version", BASE);
        $types []= \str_replace("Target", "Target$version", $r);
    }
    $fs->remove("testsGenerated/Target$version");
    $fs->remove("testsGenerated/Target10$version");
    $packages []= $promise = (new Traverser)
        ->setPlugins([
            PhabelTestGenerator::class => ['target' => $version],
            TypeHintReplacer::class => ['union' => true, 'nullable' => true, 'return' => true, 'types' => $types]
        ])
        ->setInput('testsGenerated/Target')
        ->setOutput("testsGenerated/Target$version")
        ->setCoverage("expr$version")
        ->runAsync();
    $promise->onResolve(function (?\Throwable $e, ?array $res) use ($version, &$packagesSecondary) {
        if ($e) {
            throw $e;
        }
        $packagesSecondary []= (new Traverser)
            ->setPlugins([
                PhabelTestGenerator::class => ['target' => 1000+$version]
            ])
            ->setInput("testsGenerated/Target$version")
            ->setOutput("testsGenerated/Target10$version")
            ->setCoverage("expr10$version")
            ->runAsync();
    });
}
$packages = \array_merge(...wait(all($packages)));
wait(all($packagesSecondary));

if (!empty($packages)) {
    $cmd = "composer require --dev ";
    foreach ($packages as $package => $constraint) {
        $cmd .= \escapeshellarg("$package:$constraint")." ";
    }
    echo("Running $cmd...".PHP_EOL);
    \passthru($cmd);
}

$binary = PHP_SAPI === 'phpdbg' ? PHP_BINARY." -qrr" : PHP_BINARY;

$current = (int) (PHP_MAJOR_VERSION.PHP_MINOR_VERSION);
foreach (\glob("testsGenerated/*/*.php") as $i => $test) {
    $version = (int) \substr(\basename(\dirname($test)), 6);
    $version = $version ?: 80;
    if ($version > $current) {
        continue;
    }
    echo $test.PHP_EOL;

    \passthru("$binary vendor/bin/phpunit -c phpunit-expr.xml $test --coverage-php=coverage/phpunitExpr$i.php", $ret);
    if ($ret) {
        die($ret);
    }
}
