<?php

use Symfony\CS\Config\Config;
use Symfony\CS\Finder\DefaultFinder;
use Symfony\CS\FixerInterface;

return Config::create()
    ->level(FixerInterface::SYMFONY_LEVEL)
    ->fixers(['ordered_use', 'phpdoc_order', 'short_array_syntax'])
    ->setUsingCache(true)
    ->finder(DefaultFinder::create()->in('src/'));