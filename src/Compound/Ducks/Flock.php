<?php

namespace Patterns\Compound\Ducks;

class Flock implements Quackable
{
    /**
     * @var Quackable[]
     */
    private $quackers = [];

    public function add(Quackable $quacker): void
    {
        $this->quackers[] = $quacker;
    }

    public function quack(): void
    {
        foreach ($this->quackers as $quacker) {
            $quacker->quack();
        }
    }

    public function __toString()
    {
        return 'Flock of ducks';
    }

    public function notifyObservers(): void
    {
        //
    }

    public function registerObserver(Observer $observer): void
    {
        foreach ($this->quackers as $duck) {
            $duck->registerObserver($observer);
        }
    }
}