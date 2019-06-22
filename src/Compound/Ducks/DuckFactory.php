<?php

namespace Patterns\Compound\Ducks;

class DuckFactory extends AbstractDuckFactory
{
    /**
     * @inheritDoc
     */
    public function createMallardDuck(): Quackable
    {
        return new MallardDuck();
    }

    /**
     * @inheritDoc
     */
    public function createRedheadDuck(): Quackable
    {
        return new RedheadDuck();
    }

    /**
     * @inheritDoc
     */
    public function createDuckCall(): Quackable
    {
        return new DuckCall();
    }

    /**
     * @inheritDoc
     */
    public function createRubberDuck(): Quackable
    {
        return new RubberDuck();
    }
}