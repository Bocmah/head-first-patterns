<?php

use Patterns\Composite\Diner\Menu;
use Patterns\Composite\Diner\MenuItem;
use Patterns\Composite\Diner\Waitress;

require __DIR__ . '/../../../../bootstrap.php';

$pancakeHouseMenu = new Menu('PANCAKE HOUSE MENU', 'Breakfast');
$dinerMenu = new Menu('DINER MENU', 'Lunch');
$cafeMenu = new Menu('CAFE MENU', 'Dinner');
$dessertMenu = new Menu('DESSERT MENU', 'Dessert of course!');

$allMenus = new Menu('ALL MENUS', 'All menus combined');

$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinerMenu);
$allMenus->add($cafeMenu);

$pancakeHouseMenu->add(new MenuItem(
    'Pancakes',
    'Sweet pancakes with syrup',
    true,
    4.2
));

$dinerMenu->add(new MenuItem(
    'Pasta',
    'Spaghetti with Marinara Sauce, and a slice of sourdough bread',
    true,
    3.89
));
$dinerMenu->add($dessertMenu);

$dessertMenu->add(new MenuItem(
    'Apple Pie',
    'Apple pie with a flakey crust, topped with vanilla icecream',
    true,
    1.59
));

$cafeMenu->add(new MenuItem(
    'Pelmeni',
    'Tasty pelmeni',
    false,
    2.5
));

$waitress = new Waitress($allMenus);
$waitress->printVegetarianMenu();