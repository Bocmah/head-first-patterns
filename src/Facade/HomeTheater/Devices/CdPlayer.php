<?php

namespace Patterns\Facade\HomeTheater\Devices;

class CdPlayer
{
    public function on()
    {
        echo 'Turning the CD player on...' . "\n";
    }

    public function off()
    {
        echo 'Turning the CD player off...' . "\n";
    }

    public function eject()
    {
        echo 'Ejecting the CD...' . "\n";
    }

    public function pause()
    {
        echo 'Pausing the CD...' . "\n";
    }

    public function play()
    {
        echo 'Playing the CD...' . "\n";
    }

    public function stop()
    {
        echo 'Stopping the CD...' . "\n";
    }
}