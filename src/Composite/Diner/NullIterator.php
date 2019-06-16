<?php

namespace Patterns\Composite\Diner;

class NullIterator implements Iterator
{
    /**
     * @return null
     */
    public function next()
    {
        return null;
    }

    /**
     * @return bool
     */
    public function hasNext(): bool
    {
        return false;
    }

    /**
     * @throws UnsupportedOperationException
     */
    public function remove()
    {
        throw new UnsupportedOperationException();
    }
}