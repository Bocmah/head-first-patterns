<?php

use Patterns\Adapter\Ducks\MallardDuck;
use Patterns\Adapter\Ducks\WildTurkey;
use Patterns\Adapter\Ducks\TurkeyAdapter;
use Patterns\Adapter\Ducks\Duck;

require __DIR__ . '/../../../../bootstrap.php';

function testDuck(Duck $duck) {
    $duck->quack();
    $duck->fly();
}

$duck = new MallardDuck();

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

echo 'The turkey says...' . "\n";
$turkey->gobble();
$turkey->fly();

echo "\nThe duck says...\n";
testDuck($duck);

echo "\nThe TurkeyAdapter says...\n";
testDuck($turkeyAdapter);