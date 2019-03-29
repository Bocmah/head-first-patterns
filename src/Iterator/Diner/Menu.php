<?php

namespace Patterns\Iterator\Diner;

interface Menu
{
    /**
     * @return \Iterator
     */
    public function createIterator(): \Iterator;
}