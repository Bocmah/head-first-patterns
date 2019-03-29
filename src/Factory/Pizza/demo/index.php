<?php

use Patterns\Factory\Pizza\FactoryMethod\ChicagoPizzaStore;
use Patterns\Factory\Pizza\FactoryMethod\NYPizzaStore;

require __DIR__ . '/../../../../bootstrap.php';

$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
echo 'Ethan ordered a ' . $pizza->getName() . "\n\n";

$pizza = $chicagoStore->orderPizza('cheese');
echo 'Joel ordered a ' . $pizza->getName() . "\n\n";