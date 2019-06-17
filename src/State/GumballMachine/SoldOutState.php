<?php

namespace Patterns\State\GumballMachine;

class SoldOutState implements State
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
        echo 'Sorry. Out of gumballs!' . PHP_EOL;
    }

    public function ejectQuarter(): void
    {
        echo "You haven't inserted a quarter yet" . PHP_EOL;
    }

    public function turnCrank()
    {
        echo 'Sorry. Out of gumballs!' . PHP_EOL;
    }

    public function dispense()
    {
        echo 'No gumball dispensed' . PHP_EOL;
    }
}