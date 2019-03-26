<?php

namespace Patterns\Command\HomeAutomation\Devices;

class CeilingFan
{
    public const HIGH = 3;
    public const MEDIUM = 2;
    public const LOW = 1;
    public const OFF = 0;

    /**
     * @var string
     */
    private $location;

    /**
     * @var int
     */
    private $speed;

    public function __construct(string $location)
    {
        $this->location = $location;
        $this->speed = self::OFF;
    }

    public function high()
    {
        echo 'Setting the fan to high speed...' . "\n";
        $this->speed = self::HIGH;
    }

    public function medium()
    {
        echo 'Setting the fan to medium speed...' . "\n";
        $this->speed = self::MEDIUM;
    }

    public function low()
    {
        echo 'Setting the fan to low speed...' . "\n";
        $this->speed = self::LOW;
    }

    public function off()
    {
        echo 'Turning the fan off...' . "\n";
        $this->speed = self::OFF;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }
}