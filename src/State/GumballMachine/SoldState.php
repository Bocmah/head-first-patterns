<?php

namespace Patterns\State\GumballMachine;

class SoldState implements State
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
        echo "Please wait, we're already giving you a gumball" . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo "Sorry, you already turned the crank" . PHP_EOL;
    }

    public function turnCrank(): void
    {
        echo "Turning twice doesn't get you another gumball!" . PHP_EOL;
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo 'Oops, out of gumballs!' . PHP_EOL;
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
}