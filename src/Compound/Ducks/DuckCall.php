<?php

namespace Patterns\Compound\Ducks;

class DuckCall implements Quackable
{
    /**
     * @var Observable
     */
    private $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function quack(): void
    {
        echo 'Kwak' . PHP_EOL;
    }

    public function registerObserver(Observer $observer): void
    {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers(): void
    {
        $this->observable->notifyObservers();
    }

    public function __toString()
    {
        return 'Duck call';
    }
}