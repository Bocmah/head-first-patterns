<?php

namespace Patterns\Composite\Diner;

class Menu extends MenuComponent
{
    /**
     * @var MenuComponentsCollection
     */
    private $menuComponents;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    public function __construct(string $name, string $description)
    {
        $this->menuComponents = new MenuComponentsCollection([]);
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * @param MenuComponent $menuComponent
     */
    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponents[] = $menuComponent;
    }

    /**
     * @param MenuComponent $menuComponent
     */
    public function remove(MenuComponent $menuComponent): void
    {
        $this->menuComponents->remove($menuComponent);
    }

    /**
     * @param int $i
     * @return MenuComponent
     */
    public function getChild(int $i): MenuComponent
    {
        /** @var MenuComponent $child */
        $child = $this->menuComponents[$i];

        return $child;
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

    public function print(): void
    {
        echo PHP_EOL . $this->getName();
        echo ', ' . $this->getDescription() . PHP_EOL;
        echo '--------------------' . PHP_EOL;

        /** @var MenuComponent $menuComponent */
        foreach ($this->menuComponents as $menuComponent) {
            $menuComponent->print();
        }
    }

    public function createIterator(): Iterator
    {
        return new CompositeIterator($this->menuComponents->createIterator());
    }
}