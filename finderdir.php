<?php

require_once __DIR__.'/src/autoload.php';

use Symfony\Component\Finder as Finder;

$components = Finder\Finder::create()
    ->directories()
    ->depth(0)
    ->in('vendor/Symfony/Component');

echo "Installed Symfony components:\n";
foreach ($components as $dir) {
    printf("* %s \n", $dir->getFilename());
}

