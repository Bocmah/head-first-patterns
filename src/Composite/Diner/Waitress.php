<?php

namespace Patterns\Composite\Diner;

class Waitress
{
    /**
     * @var MenuComponent
     */
    private $allMenus;

    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    /**
     * @return void
     * @throws UnsupportedOperationException
     */
    public function printMenu(): void
    {
        $this->allMenus->print();
    }

    public function printVegetarianMenu()
    {
        $iterator = $this->allMenus->createIterator();
        echo PHP_EOL . 'VEGETARIAN MENU' . PHP_EOL . '----' . PHP_EOL;
        while ($iterator->hasNext()) {
            /** @var MenuComponent $menuComponent */
            $menuComponent = $iterator->next();

            try {
                if ($menuComponent->isVegetarian()) {
                    $menuComponent->print();
                }
            } catch (UnsupportedOperationException $e) {}
        }
    }
}