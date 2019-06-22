<?php

namespace Patterns\Compound\Ducks;

abstract class AbstractDuckFactory
{
    /**
     * @return Quackable
     */
    abstract public function createMallardDuck(): Quackable;

    /**
     * @return Quackable
     */
    abstract public function createRedheadDuck(): Quackable;

    /**
     * @return Quackable
     */
    abstract public function createDuckCall(): Quackable;

    /**
     * @return Quackable
     */
    abstract public function createRubberDuck(): Quackable;
}