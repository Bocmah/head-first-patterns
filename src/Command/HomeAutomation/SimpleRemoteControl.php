<?php

namespace Patterns\Command\HomeAutomation;

use Patterns\Command\HomeAutomation\Commands\Command;

class SimpleRemoteControl
{
    /**
     * @var Command
     */
    private $slot;

    /**
     * @param Command $command
     */
    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed()
    {
        $this->slot->execute();
    }
}