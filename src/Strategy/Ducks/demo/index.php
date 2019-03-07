<?php

use Patterns\Strategy\Ducks\MallardDuck;

require __DIR__ . '/../../../../bootstrap.php';

$duck = new MallardDuck();
$duck->performFly();
$duck->performQuack();