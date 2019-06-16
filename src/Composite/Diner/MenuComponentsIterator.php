<?php

namespace Patterns\Composite\Diner;

class MenuComponentsIterator implements Iterator
{
    /**
     * @var int
     */
    private $position;

    /**
     * MenuComponent[]
     */
    private $menuComponents;

    /**
     * @param MenuComponent[] $menuComponents
     */
    public function __construct(array $menuComponents)
    {
        $this->position = -1;
        $this->menuComponents = $menuComponents;
    }

    public function next()
    {
        $this->position++;

        return $this->menuComponents[$this->position];
    }

    public function hasNext(): bool
    {
        return isset($this->menuComponents[$this->position + 1]);
    }

    /**
     * @throws UnsupportedOperationException
     */
    public function remove()
    {
        throw new UnsupportedOperationException();
    }
}