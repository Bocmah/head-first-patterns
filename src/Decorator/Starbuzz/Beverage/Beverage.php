<?php

namespace Patterns\Decorator\Starbuzz\Beverage;

abstract class Beverage
{
    /**
     * @var string
     */
    protected $description = 'Unknown Beverage';

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return float
     */
    abstract public function cost(): float;
}