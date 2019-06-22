<?php

namespace Patterns\Compound\Ducks;

class MallardDuck implements Quackable
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
        echo 'Quack' . PHP_EOL;
        $this->notifyObservers();
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
        return 'Mallard duck';
    }
}