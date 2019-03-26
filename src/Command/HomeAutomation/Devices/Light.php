<?php

namespace Patterns\Command\HomeAutomation\Devices;

class Light
{
    /**
     * @var string
     */
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function on()
    {
        echo 'Turning the light on...' . "\n";
    }

    public function off()
    {
        echo 'Turning the light off...' . "\n";
    }
}