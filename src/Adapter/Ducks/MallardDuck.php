<?php

namespace Patterns\Adapter\Ducks;

class MallardDuck implements Duck
{
    public function quack()
    {
        echo 'Quack' . "\n";
    }

    public function fly()
    {
        echo "I'm flying\n";
    }
}