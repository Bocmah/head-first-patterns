<?php

namespace Patterns\Command\HomeAutomation\Commands;

use Patterns\Command\HomeAutomation\Devices\Stereo;

class StereoOnCommand implements Command
{
    /**
     * @var Stereo
     */
    private $stereo;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->on();
    }

    public function undo()
    {
        $this->stereo->off();
    }
}