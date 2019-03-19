<?php

namespace Patterns\Decorator\Starbuzz\Beverage;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .99;
    }
}