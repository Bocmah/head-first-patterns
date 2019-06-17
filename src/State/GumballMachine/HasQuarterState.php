<?php

namespace Patterns\State\GumballMachine;

class HasQuarterState implements State
{
    /**
     * @var GumballMachine
     */
    private $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "You can't insert another quarter" . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo 'Quarter returned' . PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank(): void
    {
        echo 'You turned...' . PHP_EOL;

        $randomNumber = rand(0, 9);
        if (($randomNumber === 0) && ($this->gumballMachine->getCount() > 1)) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense(): void
    {
        echo 'No gumball dispensed' . PHP_EOL;
    }
}