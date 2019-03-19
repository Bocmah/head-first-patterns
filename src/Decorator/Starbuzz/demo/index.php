<?php

use Patterns\Decorator\Starbuzz\Beverage\Espresso;
use Patterns\Decorator\Starbuzz\Beverage\DarkRoast;
use Patterns\Decorator\Starbuzz\Beverage\HouseBlend;
use Patterns\Decorator\Starbuzz\Condiment\Mocha;
use Patterns\Decorator\Starbuzz\Condiment\Soy;
use Patterns\Decorator\Starbuzz\Condiment\Whip;

require __DIR__ . '/../../../../bootstrap.php';

$beverage = new Espresso();
echo $beverage->getDescription() . ' $' . $beverage->cost() . "\n";

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . ' $' . $beverage2->cost() . "\n";

$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . ' $' . $beverage3->cost() . "\n";