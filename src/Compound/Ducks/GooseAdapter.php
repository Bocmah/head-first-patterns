<?php

namespace Patterns\Compound\Ducks;

class GooseAdapter implements Quackable
{
    /**
     * @var Goose
     */
    private $goose;

    /**
     * @var Observable
     */
    private $observable;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
        $this->observable = new Observable($this);
    }

    public function quack(): void
    {
        $this->goose->honk();
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
        return 'Goose pretending to be a duck';
    }
}