<?php

namespace Patterns\Command\HomeAutomation\Devices;

class GarageDoor
{
    /**
     * @var string
     */
    private $location;

    public function __construct(string $location)
    {
        $this->location = $location;
    }

    public function up()
    {
        echo 'Putting the garage door up...' . "\n";
    }

    public function down()
    {
        echo 'Putting the garage door down...' . "\n";
    }

    public function stop()
    {
        echo 'Stopping the garage door' . "\n";
    }

    public function lightOn()
    {
        echo 'Turning the garage door lights on...' . "\n";
    }

    public function lightOff()
    {
        echo 'Turning the garage door lights off...' . "\n";
    }
}