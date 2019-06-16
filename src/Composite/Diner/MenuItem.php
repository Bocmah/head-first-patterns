<?php

namespace Patterns\Composite\Diner;

class MenuItem extends MenuComponent
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $vegetarian;

    /**
     * @var float
     */
    private $price;

    public function __construct(
        string $name,
        string $description,
        bool $vegetarian,
        float $price
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return bool
     */
    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    /**
     * @return void
     */
    public function print(): void
    {
        echo " " . $this->getName();

        if ($this->isVegetarian()) {
            echo "(v)";
        }

        echo ", " . $this->getPrice();
        echo PHP_EOL . "     -- " . $this->getDescription() . PHP_EOL;
    }

    /**
     * @return Iterator
     */
    public function createIterator(): Iterator
    {
        return new NullIterator();
    }
}