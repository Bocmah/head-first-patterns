<?php

namespace Patterns\Facade\HomeTheater\Devices;

class Amplifier
{
    /**
     * @var Tuner
     */
    private $tuner;

    /**
     * @var DvdPlayer
     */
    private $dvd;

    /**
     * @var CdPlayer
     */
    private $cdPlayer;

    /**
     * @var int
     */
    private $volume;

    public function on()
    {
        echo 'Turning the amplifier on...' . "\n";
    }

    public function off()
    {
        echo 'Turning the amplifier off...' . "\n";
    }

    public function setCd(CdPlayer $cd)
    {
        $this->cdPlayer = $cd;
    }

    public function setDvd(DvdPlayer $dvd)
    {
        $this->dvd = $dvd;
    }

    public function setStereoSound()
    {
        echo 'Setting stereo sound...' . "\n";
    }

    public function setSurroundSound()
    {
        echo 'Setting surround sound...' . "\n";
    }

    public function setTuner(Tuner $tuner)
    {
        $this->tuner = $tuner;
    }

    public function setVolume(int $volume)
    {
        $this->volume = $volume;
    }
}