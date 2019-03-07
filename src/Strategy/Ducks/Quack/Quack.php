<?php

namespace Patterns\Strategy\Ducks\Quack;

class Quack implements QuackStrategy
{
    /**
     * @inheritdoc
     */
    public function quack(): void
    {
        echo 'Quack'  . "\n";
    }
}