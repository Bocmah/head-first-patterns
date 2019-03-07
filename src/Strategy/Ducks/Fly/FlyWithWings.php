<?php

namespace Patterns\Strategy\Ducks\Fly;

class FlyWithWings implements FlyStrategy
{
    /**
     * @inheritdoc
     */
    public function fly(): void
    {
        echo 'Flying with wings'  . "\n";
    }
}