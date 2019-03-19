<?php

namespace Patterns\Decorator\Starbuzz\Condiment;

use Patterns\Decorator\Starbuzz\Beverage\Beverage;

class Soy extends CondimentDecorator
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
        return $this->beverage->getDescription() . ', Soy';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return .15 + $this->beverage->cost();
    }
}