<?php

namespace Patterns\Command\HomeAutomation\Commands;

class NoCommand implements Command
{
    public function execute()
    {
        echo 'Do nothing' . "\n";
    }

    public function undo()
    {
        echo 'Do nothing' . "\n";
    }
}