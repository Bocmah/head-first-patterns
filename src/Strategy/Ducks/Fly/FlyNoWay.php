<?php

namespace Patterns\Strategy\Ducks\Fly;

class FlyNoWay implements FlyStrategy
{
    /**
     * @inheritdoc
     */
    public function fly(): void
    {
        echo "Can't fly"  . "\n";
    }
}