<?php

namespace Patterns\Command\HomeAutomation;

use Patterns\Command\HomeAutomation\Commands\Command;
use Patterns\Command\HomeAutomation\Commands\NoCommand;

class RemoteControl
{
    /**
     * @var \SplFixedArray
     */
    private $onCommands;

    /**
     * @var \SplFixedArray
     */
    private $offCommands;

    public function __construct()
    {
        $this->onCommands = new \SplFixedArray(7);
        $this->offCommands = new \SplFixedArray(7);

        $noCommand = new NoCommand();
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
        }
    }

    /**
     * @param int $slot
     * @param Command $onCommand
     * @param Command $offCommand
     */
    public function setCommand(int $slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    /**
     * @param int $slot
     */
    public function onButtonWasPushed(int $slot)
    {
        $this->onCommands[$slot]->execute();
    }

    /**
     * @param int $slot
     */
    public function offButtonWasPushed(int $slot)
    {
        $this->offCommands[$slot]->execute();
    }

    public function __toString()
    {
        $string = "\n------ Remote Control ------\n";

        for ($i = 0; $i < $this->onCommands->count(); $i++) {
            $string .= "[slot " . $i . "] " . get_class($this->onCommands[$i]) . "    "
                       . get_class($this->offCommands[$i]) . "\n";
        }

        return $string;
    }
}