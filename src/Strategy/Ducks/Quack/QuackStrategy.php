<?php

namespace Patterns\Strategy\Ducks\Quack;

interface QuackStrategy
{
    /**
     * @return void
     */
    public function quack(): void;
}