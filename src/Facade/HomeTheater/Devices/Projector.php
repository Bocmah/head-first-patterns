<?php

namespace Patterns\Facade\HomeTheater\Devices;

class Projector
{
    /**
     * @var DvdPlayer
     */
    private $dvd;

    public function __construct(DvdPlayer $dvd)
    {
        $this->dvd = $dvd;
    }

    public function on()
    {
        echo 'Turning the projector on...' . "\n";
    }

    public function off()
    {
        echo 'Turning the projector off...' . "\n";
    }

    public function tvMode()
    {
        echo 'Changing the TV mode...' . "\n";
    }

    public function wideScreenMode()
    {
        echo 'Setting the wide screen mode...' . "\n";
    }
}