<?php

use Patterns\TemplateMethod\CoffeeTea\TeaWithHook;
use Patterns\TemplateMethod\CoffeeTea\CoffeeWithHook;

require __DIR__ . '/../../../../bootstrap.php';

$teaHook = new TeaWithHook();
$coffeeHook = new CoffeeWithHook();

echo "\nMaking tea...\n";
$teaHook->prepareRecipe();

echo "\nMaking coffee...\n";
$coffeeHook->prepareRecipe();