<?php

namespace Patterns\Decorator\Starbuzz\Condiment;

use Patterns\Decorator\Starbuzz\Beverage\Beverage;

class Whip extends CondimentDecorator
{
    /**
     * @var Beverage
     */
    private $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .10 + $this->beverage->cost();
    }
}