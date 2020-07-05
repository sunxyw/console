<?php

use Sunxyw\Console\Console;

require __DIR__ . '/../vendor/autoload.php';

foreach (array_keys(Console::$styles) as $style) {
    Console::println("This is {$style} msg.", $style);
}
