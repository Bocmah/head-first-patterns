<?php

namespace Patterns\Decorator\Starbuzz\Beverage;

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = 'Decaf Coffee';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return 1.05;
    }
}