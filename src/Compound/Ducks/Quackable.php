<?php

namespace Patterns\Compound\Ducks;

interface Quackable extends QuackObservable
{
    /**
     * @return void
     */
    public function quack(): void;
}