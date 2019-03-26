<?php

namespace Patterns\Command\HomeAutomation\Commands;

use Patterns\Command\HomeAutomation\Devices\Light;

class LightOffCommand implements Command
{
    /**
     * @var Light
     */
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}