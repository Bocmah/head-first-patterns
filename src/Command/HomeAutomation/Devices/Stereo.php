<?php

namespace Patterns\Command\HomeAutomation\Devices;

class Stereo
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
        echo 'Turning the stereo on...' . "\n";
    }

    public function off()
    {
        echo 'Turning the stereo off...' . "\n";
    }

    public function setCd()
    {
        echo 'Setting the CD...' . "\n";
    }

    public function setDvd()
    {
        echo 'Setting the DVD...' . "\n";
    }

    public function setRadio()
    {
        echo 'Setting the radio...' . "\n";
    }

    public function setVolume(int $volume)
    {
        echo 'Setting the volume to ' . $volume . '...' . "\n";
    }
}