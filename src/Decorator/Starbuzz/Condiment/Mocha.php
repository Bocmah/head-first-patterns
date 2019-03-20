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
            $cost += .15;
        } elseif ($size === Beverage::SIZE_GRANDE) {
            $cost += .20;
        } elseif ($size === Beverage::SIZE_VENTI) {
            $cost += .25;
        }

        return $cost;
    }
}