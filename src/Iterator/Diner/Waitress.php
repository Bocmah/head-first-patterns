<?php

namespace Patterns\Iterator\Diner;

class Waitress
{
    /**
     * @var Menu
     */
    private $pancakeHouseMenu;

    /**
     * @var Menu
     */
    private $dinerMenu;

    /**
     * @var Menu
     */
    private $cafeMenu;

    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu, Menu $cafeMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
        $this->cafeMenu = $cafeMenu;
    }

    public function printMenu()
    {
        $pancakeIterator = $this->pancakeHouseMenu->createIterator();
        $dinerIterator = $this->dinerMenu->createIterator();
        $cafeIterator = $this->cafeMenu->createIterator();
        echo "MENU\n----\nBREAKFAST\n";
        $this->printMenuViaIterator($pancakeIterator);
        echo "\nLUNCH\n";
        $this->printMenuViaIterator($dinerIterator);
        echo "\nDINNER\n";
        $this->printMenuViaIterator($cafeIterator);
    }

    private function printMenuViaIterator(\Iterator $iterator)
    {
        for ($iterator->rewind(); $iterator->valid(); $iterator->next()) {
            $menuItem = $iterator->current();
            echo $menuItem->getName() . ", ";
            echo $menuItem->getPrice() . " -- ";
            echo $menuItem->getDescription() . "\n";
        }
    }
}