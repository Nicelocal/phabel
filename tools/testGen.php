<?php

use Composer\Util\Filesystem;
use Phabel\Plugin\PhabelTestGenerator;
use Phabel\Target\Php;
use PhabelTest\TraverserTask;
use SebastianBergmann\CodeCoverage\Report\Clover;
use SebastianBergmann\CodeCoverage\Report\Html\Facade;
use SebastianBergmann\CodeCoverage\Report\PHP as ReportPHP;
use SebastianBergmann\CodeCoverage\Report\Text;

use function Amp\Promise\all;
use function Amp\Promise\wait;

require_once 'vendor/autoload.php';

$fs = new Filesystem();

$packages = [];
$packagesSecondary = [];
foreach (Php::VERSIONS as $version) {
    $fs->remove("tests/Target$version");
    $fs->remove("tests/Target10$version");
    $packages []= $promise = TraverserTask::runAsync(
        [
            PhabelTestGenerator::class => ['target' => $version]
        ],
        'tests/Target',
        "tests/Target$version"
    );
    $promise->onResolve(function (?\Throwable $e, ?array $res) use ($version, &$packagesSecondary) {
        if ($e) {
            throw $e;
        }
        $packagesSecondary []= TraverserTask::runAsync(
            [
                PhabelTestGenerator::class => ['target' => 1000+$version]
            ],
            "tests/Target$version",
            "tests/Target10$version"
        );
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
if ($coverage = TraverserTask::getCoverage()) {
    (new ReportPHP)->process($coverage, $argv[1] ?? 'coverage/transpiler.php');
}
