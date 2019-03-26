<?php

namespace Patterns\Command\HomeAutomation\Commands;

use Patterns\Command\HomeAutomation\Devices\TV;

class TVOnCommand implements Command
{
    /**
     * @var TV
     */
    private $tv;

    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute()
    {
        $this->tv->on();
    }

    public function undo()
    {
        $this->tv->off();
    }
}