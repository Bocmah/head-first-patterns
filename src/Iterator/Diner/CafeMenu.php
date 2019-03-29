<?php

namespace Patterns\Iterator\Diner;

use SplObjectStorage;

class CafeMenu implements Menu
{
    /**
     * @var SplObjectStorage
     */
    private $menuItems;

    public function __construct()
    {
        $this->menuItems = new SplObjectStorage();

        $this->addItem(
            "Veggie Burger and Air Fries",
            "Veggie burger on a whole wheat bun, lettuce, tomato, and fries",
            true,
            3.99
        );

        $this->addItem(
            "Soup of the day",
            "A cup of the soup of the day, with a side salad",
            false,
            3.69
        );

        $this->addItem(
            "Burrito",
            "A large burrito, with whole pinto beans, salsa, guacamole",
            true,
            4.29
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

        $this->menuItems->attach($menuItem);
    }

    /**
     * @return \Iterator
     */
    public function createIterator(): \Iterator
    {
        return $this->menuItems;
    }
}