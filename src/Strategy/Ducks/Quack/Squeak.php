<?php

namespace Patterns\Strategy\Ducks\Quack;

class Squeak implements QuackStrategy
{
    /**
     * @inheritdoc
     */
    public function quack(): void
    {
        echo 'Squeak' . "\n";
    }
}