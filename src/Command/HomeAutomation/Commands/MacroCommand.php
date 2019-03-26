<?php

namespace Patterns\Command\HomeAutomation\Commands;

class MacroCommand implements Command
{
    /**
     * @var \SplFixedArray
     */
    private $commands;

    public function __construct(\SplFixedArray $commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        for ($i = 0; $i < $this->commands->count(); $i++) {
            $this->commands[$i]->execute();
        }
    }

    public function undo()
    {
        for ($i = 0; $i < $this->commands->count(); $i++) {
            $this->commands[$i]->undo();
        }
    }
}