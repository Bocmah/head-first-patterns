<?php

namespace Patterns\Strategy\Ducks\Quack;

class MuteQuack implements QuackStrategy
{
    /**
     * @inheritdoc
     */
    public function quack(): void
    {
        echo "Can't quack"  . "\n";
    }
}