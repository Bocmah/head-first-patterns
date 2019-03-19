<?php

namespace Patterns\Decorator\Starbuzz\Beverage;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .89;
    }
}