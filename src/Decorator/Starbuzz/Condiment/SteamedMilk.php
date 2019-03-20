<?php

namespace Patterns\Decorator\Starbuzz\Condiment;

use Patterns\Decorator\Starbuzz\Beverage\Beverage;

class SteamedMilk extends CondimentDecorator
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
        return $this->beverage->getDescription() . ', Steamed Milk';
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->beverage->getSize();
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        $cost = $this->beverage->cost();
        $size = $this->getSize();

        if ($size === Beverage::SIZE_TALL) {
            $cost += .05;
        } elseif ($size === Beverage::SIZE_GRANDE) {
            $cost += .10;
        } elseif ($size === Beverage::SIZE_VENTI) {
            $cost += .15;
        }

        return $cost;
    }
}