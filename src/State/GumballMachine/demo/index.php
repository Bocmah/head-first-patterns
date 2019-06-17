<?php

use Patterns\State\GumballMachine\GumballMachine;

require __DIR__ . '/../../../../bootstrap.php';

$gumballMachine = new GumballMachine(5);

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo $gumballMachine;