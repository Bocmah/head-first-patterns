<?php

namespace Patterns\Iterator\Diner;

class PancakeHouseMenuIterator implements \Iterator
{
    /**
     * @var array
     */
    private $items;

    /**
     * @var int
     */
    private $position = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function current()
    {
        return $this->items[$this->position];
    }

    public function next()
    {
        $this->position = $this->position + 1;
    }

    public function key()
    {
        return $this->position;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        if ($this->position >= count($this->items)) {
            return false;
        } else {
            return true;
        }
    }
}