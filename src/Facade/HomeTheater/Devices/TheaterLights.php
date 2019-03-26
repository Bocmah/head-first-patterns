<?php

namespace Patterns\Facade\HomeTheater\Devices;

class TheaterLights
{
    /**
     * @var int
     */
    private $dimness;

    public function on()
    {
        echo 'Turning the theater lights on...' . "\n";
    }

    public function off()
    {
        echo 'Turning the theater lights off...' . "\n";
    }

    public function dim(int $dimness)
    {
        echo 'Dimming the lights to ' . $dimness . '%' . "\n";
        $this->dimness = $dimness;
    }
}