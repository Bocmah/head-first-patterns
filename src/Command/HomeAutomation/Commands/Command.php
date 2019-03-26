<?php

namespace Patterns\Command\HomeAutomation\Commands;

interface Command
{
    public function execute();
    public function undo();
}