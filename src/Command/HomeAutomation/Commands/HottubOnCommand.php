<?php

namespace Patterns\Command\HomeAutomation\Commands;

use Patterns\Command\HomeAutomation\Devices\Hottub;

class HottubOnCommand implements Command
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
        $this->hottub->on();
    }

    public function undo()
    {
        $this->hottub->off();
    }
}