<?php

namespace Patterns\Decorator\Starbuzz\Beverage;

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return 1.99;
    }
}