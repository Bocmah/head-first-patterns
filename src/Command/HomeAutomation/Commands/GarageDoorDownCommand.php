<?php

namespace Patterns\Command\HomeAutomation\Commands;

use Patterns\Command\HomeAutomation\Devices\GarageDoor;

class GarageDoorDownCommand implements Command
{
    /**
     * @var GarageDoor
     */
    private $door;

    public function __construct(GarageDoor $door)
    {
        $this->door = $door;
    }

    public function execute()
    {
        $this->door->down();
    }
}