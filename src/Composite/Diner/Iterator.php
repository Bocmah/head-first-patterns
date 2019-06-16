<?php

namespace Patterns\Composite\Diner;

interface Iterator
{
    public function hasNext(): bool;
    public function next();
    public function remove();
}