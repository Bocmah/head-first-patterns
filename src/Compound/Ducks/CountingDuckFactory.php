<?php

namespace Patterns\Compound\Ducks;

class CountingDuckFactory extends AbstractDuckFactory
{
    /**
     * @inheritDoc
     */
    public function createMallardDuck(): Quackable
    {
        return new QuackCounter(new MallardDuck());
    }

    /**
     * @inheritDoc
     */
    public function createRedheadDuck(): Quackable
    {
        return new QuackCounter(new RedheadDuck());
    }

    /**
     * @inheritDoc
     */
    public function createDuckCall(): Quackable
    {
        return new QuackCounter(new DuckCall());
    }

    /**
     * @inheritDoc
     */
    public function createRubberDuck(): Quackable
    {
        return new QuackCounter(new RubberDuck());
    }
}