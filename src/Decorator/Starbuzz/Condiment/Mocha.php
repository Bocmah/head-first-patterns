<?php

namespace Patterns\Decorator\Starbuzz\Condiment;

use Patterns\Decorator\Starbuzz\Beverage\Beverage;

class Mocha extends CondimentDecorator
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
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .20 + $this->beverage->cost();
    }
}