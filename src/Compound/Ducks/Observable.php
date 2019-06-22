<?php

namespace Patterns\Compound\Ducks;

use SplObjectStorage;

class Observable implements QuackObservable
{
    /**
     * @var SplObjectStorage
     */
    private $observers;

    /**
     * @var QuackObservable
     */
    private $duck;

    public function __construct(QuackObservable $duck)
    {
        $this->duck = $duck;
        $this->observers = new SplObjectStorage();
    }

    public function registerObserver(Observer $observer): void
    {
        $this->observers->attach($observer);
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->duck);
        }
    }

    public function __toString()
    {
        return (string)$this->duck;
    }
}