<?php

namespace Patterns\Strategy\Ducks;

use Patterns\Strategy\Ducks\Fly\FlyStrategy;
use Patterns\Strategy\Ducks\Quack\QuackStrategy;

abstract class Duck
{
    /**
     * @var FlyStrategy
     */
    protected $flyStrategy;

    /**
     * @var QuackStrategy
     */
    protected $quackStrategy;

    /**
     * @return void
     */
    public function performFly(): void
    {
        $this->flyStrategy->fly();
    }

    /**
     * @return void
     */
    public function performQuack(): void
    {
        $this->quackStrategy->quack();
    }

    /**
     * @return void
     */
    public function swim(): void
    {
        echo 'Swimming' . "\n";
    }

    public function setFlyStrategy(FlyStrategy $fs): void
    {
        $this->flyStrategy = $fs;
    }

    public function setQuackStrategy(QuackStrategy $qs): void
    {
        $this->quackStrategy = $qs;
    }

    abstract public function display();
}