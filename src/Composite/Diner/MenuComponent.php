<?php

namespace Patterns\Composite\Diner;

abstract class MenuComponent
{
    /**
     * @param MenuComponent $menuComponent
     * @throws UnsupportedOperationException
     */
    public function add(MenuComponent $menuComponent): void
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @param MenuComponent $menuComponent
     * @throws UnsupportedOperationException
     */
    public function remove(MenuComponent $menuComponent): void
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @param int $i
     * @return MenuComponent
     * @throws UnsupportedOperationException
     */
    public function getChild(int $i): MenuComponent
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @return string
     * @throws UnsupportedOperationException
     */
    public function getName(): string
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @return string
     * @throws UnsupportedOperationException
     */
    public function getDescription(): string
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @return float
     * @throws UnsupportedOperationException
     */
    public function getPrice(): float
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @return bool
     * @throws UnsupportedOperationException
     */
    public function isVegetarian(): bool
    {
       throw new UnsupportedOperationException();
    }

    /**
     * @return void
     * @throws UnsupportedOperationException
     */
    public function print(): void
    {
       throw new UnsupportedOperationException();
    }

    /**
     * @return Iterator
     */
    abstract public function createIterator(): Iterator;
}