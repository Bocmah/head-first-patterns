<?php

namespace Patterns\Command\HomeAutomation\Commands;

use Patterns\Command\HomeAutomation\Devices\Hottub;

class HottubOffCommand implements Command
{
    /**
     * @var Hottub
     */
    private $hottub;

    public function __construct(Hottub $hottub)
    {
        $this->hottub = $hottub;
    }

    public function execute()
    {
        $this->hottub->off();
    }

    public function undo()
    {
        $this->hottub->on();
    }
}