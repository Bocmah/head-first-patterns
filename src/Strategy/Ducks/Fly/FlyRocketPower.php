<?php

namespace Patterns\Strategy\Ducks\Fly;

class FlyRocketPower implements FlyStrategy
{
    /**
     * @inheritdoc
     */
    public function fly(): void
    {
        echo 'Fly rocket power'  . "\n";
    }
}