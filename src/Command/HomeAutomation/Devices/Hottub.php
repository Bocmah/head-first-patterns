<?php

namespace Patterns\Command\HomeAutomation\Devices;

class Hottub
{
    public function on()
    {
        echo 'Turning the hottub on...' . "\n";
    }

    public function off()
    {
        echo 'Turning the hottub off...' . "\n";
    }

    public function circulate()
    {
        echo 'Circulating...' . "\n";
    }

    public function jetsOn()
    {
        echo 'Turning the jets on...' . "\n";
    }

    public function jetsOff()
    {
        echo 'Turning the jets off...' . "\n";
    }

    public function setTemperature()
    {
        echo 'Setting the temperature...' . "\n";
    }
}