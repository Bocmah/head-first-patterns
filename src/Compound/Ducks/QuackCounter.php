<?php

namespace Patterns\Compound\Ducks;

class QuackCounter implements Quackable
{
    /**
     * @var Quackable
     */
    private $duck;

    /**
     * @var Observable
     */
    private $observable;

    /**
     * @var int
     */
    private static $numberOfQuacks;

    public function __construct(Quackable $duck)
    {
        $this->duck = $duck;
        $this->observable = new Observable($duck);
    }

    public function quack(): void
    {
        $this->duck->quack();
        self::$numberOfQuacks++;
        $this->notifyObservers();
    }

    public static function getQuacks(): int
    {
        return self::$numberOfQuacks;
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
        return (string)$this->duck;
    }
}