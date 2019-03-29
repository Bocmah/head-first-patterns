<?php

namespace Patterns\Iterator\Diner;

class DinerMenu implements Menu
{
    public const MAX_ITEMS = 4;

    /**
     * @var int
     */
    private $numberOfItems = 0;

    /**
     * @var \SplFixedArray
     */
    private $menuItems;

    public function __construct()
    {
        $this->menuItems = new \SplFixedArray(self::MAX_ITEMS);

        $this->addItem(
            "Vegetarian BLT",
            "(Fakin') Bacon with lettuce & tomato on whole wheat",
            true,
            2.99
        );

        $this->addItem(
            "BLT",
            "Bacon with lettuce & tomato on whole wheat",
            false,
            2.99
        );

        $this->addItem(
            "Soup of the day",
            "Soup of the dat, with a side of potato salad",
            false,
            3.29
        );

        $this->addItem(
            "Hotdog",
            "A hot dog, with saurkraut, relish, onions, topped with cheese",
            false,
            3.05
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

        if ($this->numberOfItems >= self::MAX_ITEMS) {
            echo "Sorry, menu is full! Can't add item to menu" . "\n";
        } else {
            $this->menuItems[$this->numberOfItems] = $menuItem;
            $this->numberOfItems = $this->numberOfItems + 1;
        }
    }

    /**
     * @return \Iterator
     */
    public function createIterator(): \Iterator
    {
        return $this->menuItems;
    }
}