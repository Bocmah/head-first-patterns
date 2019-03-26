<?php

namespace Patterns\Facade\HomeTheater\Devices;

class Tuner
{
    public function on()
    {
        echo 'Turning the tuner on...' . "\n";
    }

    public function off()
    {
        echo 'Turning the tuner off...' . "\n";
    }

    public function setAm()
    {
        echo 'Setting Am...' . "\n";
    }

    public function setFm()
    {
        echo 'Setting Fm...' . "\n";
    }

    public function setFrequency()
    {
        echo 'Setting frequency...' . "\n";
    }
}