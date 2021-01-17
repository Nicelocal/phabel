<?php

$os = ['ubuntu-latest', 'windows-latest', 'macos-latest'];
$php = [56, 70, 71, 72, 73, 80];

$branch = \trim(\shell_exec("git rev-parse --abbrev-ref HEAD"));
$message = \trim(\shell_exec("git log -1 --pretty=%H"));
$tag = \trim(\shell_exec("git describe --tags"));

$doBuild = !\str_contains($message, "Commit generated by phabel.io");

$final = [];
$ok = false;
$tail = \substr($branch, -3);
foreach ($php as $version) {
    if ($tail === "-$version") {
        $ok = true;
    }
    $final []= $version;
}
$final = $final ?: [80];

$matrix = [
    'os' => $os,
    'php' => $final,
    'shouldBuild' => $doBuild,
];
$matrix = \json_encode($matrix);

echo "::set-output name=matrix::$matrix".PHP_EOL;
