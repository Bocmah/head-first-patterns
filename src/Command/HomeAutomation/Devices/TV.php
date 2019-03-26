<?php

namespace Patterns\Command\HomeAutomation\Devices;

class TV
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
        echo 'Turning TV on...' . "\n";
    }

    public function off()
    {
        echo 'Turning TV off...' . "\n";
    }

    public function setInputChannel()
    {
        echo 'Setting input channel...' . "\n";
    }

    public function setVolume()
    {
        echo 'Setting volume...' . "\n";
    }
}