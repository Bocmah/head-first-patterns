<?php

namespace Patterns\Decorator\Starbuzz\Beverage;

abstract class Beverage
{
    public const SIZE_TALL = 'tall';
    public const SIZE_GRANDE = 'grande';
    public const SIZE_VENTI = 'venti';

    /**
     * @var string
     */
    protected $description = 'Unknown Beverage';

    /**
     * @var string
     */
    protected $size;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size)
    {
        $this->size = $size;
    }

    /**
     * @return float
     */
    abstract public function cost(): float;
}