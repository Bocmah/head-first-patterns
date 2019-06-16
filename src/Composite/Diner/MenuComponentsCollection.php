<?php

namespace Patterns\Composite\Diner;

use ArrayAccess;
use InvalidArgumentException;

class MenuComponentsCollection implements ArrayAccess
{
    /**
     * @var MenuComponent[]
     */
    private $menuComponents;

    /**
     * @param MenuComponent[] $menuComponents
     */
    public function __construct(array $menuComponents)
    {
        $this->menuComponents = $menuComponents;
    }

    public function offsetExists($offset)
    {
        return isset($this->array[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->array[$offset]) ? $this->menuComponents[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (!$value instanceof MenuComponent) {
            throw new InvalidArgumentException('Value must be instance of MenuComponent');
        }

        if (is_null($offset)) {
            $this->menuComponents[] = $value;
        } else {
            $this->menuComponents[$offset] = $value;
        }
    }

    public function remove(MenuComponent $menuComponent)
    {
        $keys = array_keys($this->menuComponents, $menuComponent);

        foreach ($keys as $key) {
            unset($this->menuComponents[$key]);
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->menuComponents[$offset]);
    }

    /**
     * @return MenuComponentsIterator
     */
    public function createIterator()
    {
        return new MenuComponentsIterator($this->menuComponents);
    }
}