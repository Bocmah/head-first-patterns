<?php

namespace Patterns\Facade\HomeTheater\Devices;

class PopcornPopper
{
    public function on()
    {
        echo 'Turning the popcorn popper on...' . "\n";
    }

    public function off()
    {
        echo 'Turning the popcorn popper off...' . "\n";
    }

    public function pop()
    {
        echo 'Popping the popcorn...' . "\n";
    }
}