<?php

namespace Patterns\Compound\Ducks;

interface QuackObservable
{
    /**
     * @param Observer $observer
     */
    public function registerObserver(Observer $observer): void;

    /**
     * @return void
     */
    public function notifyObservers(): void;

    public function __toString();
}