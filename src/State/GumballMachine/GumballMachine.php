<?php

namespace Patterns\State\GumballMachine;

class GumballMachine
{
    /**
     * @var State
     */
    private $soldOutState;

    /**
     * @var State
     */
    private $noQuarterState;

    /**
     * @var State
     */
    private $hasQuarterState;

    /**
     * @var State
     */
    private $soldState;

    /**
     * @var State
     */
    private $winnerState;

    /**
     * @var State
     */
    private $state;

    /**
     * @var int
     */
    private $count;

    public function __construct(int $numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);
        $this->count = $numberGumballs;
        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function __toString()
    {
        return <<<EOT
Mighty Gumball, Inc.
PHP-enabled Standing Gumball Model #2019
Inventory: {$this->getCount()} gumballs

EOT;

    }

    public function insertQuarter(): void
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter(): void
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function releaseBall()
    {
        echo "A gumball comes rolling out of the slot..." . PHP_EOL;

        if ($this->count !== 0) {
            $this->count--;
        }
    }

    public function refill(int $numberGumballs)
    {
        $this->count += $numberGumballs;

        if ($this->state === $this->soldOutState) {
            $this->state = $this->noQuarterState;
        }
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->state = $state;
    }

    /**
     * @return State
     */
    public function getNoQuarterState(): State
    {
        return $this->noQuarterState;
    }

    /**
     * @return State
     */
    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }

    /**
     * @return State
     */
    public function getHasQuarterState(): State
    {
        return $this->hasQuarterState;
    }

    /**
     * @return State
     */
    public function getSoldState(): State
    {
        return $this->soldState;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return State
     */
    public function getWinnerState(): State
    {
        return $this->winnerState;
    }
}