<?php

namespace Patterns\Iterator\Diner;

interface Iterator
{
    public function hasNext(): bool;
    public function next();
}