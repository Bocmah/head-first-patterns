<?php

namespace Patterns\Iterator\Diner;

class PancakeHouseMenu implements Menu
{
    /**
     * @var array
     */
    private $menuItems;

    public function __construct()
    {
        $this->menuItems = [];

        $this->addItem(
            "K&B's Pancake Breakfast",
            "Pancakes with scrambled eggs, and toast",
            true,
            2.99
        );

        $this->addItem(
            "Regular Pancake Breakfast",
            "Pancakes with fried eggs, sausage",
            false,
            2.99
        );

        $this->addItem(
            "Blueberry Pancakes",
            "Pancakes made with fresh blueberries",
            true,
            3.49
        );

        $this->addItem(
            "Waffles",
            "Waffles, with your choice of blueberries or strawberries",
            true,
            3.59
        );
    }

    /**
     * @param string $name
     * @param string $description
     * @param bool $vegetarian
     * @param float $price
     */
    public function addItem(string $name, string $description, bool $vegetarian, float $price)
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems[] = $menuItem;
    }

    /**
     * @return \Iterator
     */
    public function createIterator(): \Iterator
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }
}