<?php

namespace Patterns\Facade\HomeTheater\Devices;

class DvdPlayer
{
    public function on()
    {
        echo 'Turning the DVD player on...' . "\n";
    }

    public function off()
    {
        echo 'Turning the DVD player off...' . "\n";
    }

    public function eject()
    {
        echo 'Ejecting the DVD...' . "\n";
    }

    public function pause()
    {
        echo 'Pausing the DVD...' . "\n";
    }

    public function play(string $movie)
    {
        echo 'Playing the movie ' . $movie . '...' . "\n";
    }

    public function setSurroundAudio()
    {
        echo 'Setting the surround audio...' . "\n";
    }

    public function setTwoChannelAudio()
    {
        echo 'Setting the two channel audio...' . "\n";
    }

    public function stop()
    {
        echo 'Stopping the DVD...' . "\n";
    }
}