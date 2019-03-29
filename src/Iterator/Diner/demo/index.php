<?php

use Patterns\Iterator\Diner\PancakeHouseMenu;
use Patterns\Iterator\Diner\CafeMenu;
use Patterns\Iterator\Diner\DinerMenu;
use Patterns\Iterator\Diner\Waitress;

require __DIR__ . '/../../../../bootstrap.php';

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu = new DinerMenu();
$cafeMenu = new CafeMenu();

$waitress = new Waitress($pancakeHouseMenu, $dinerMenu, $cafeMenu);

$waitress->printMenu();