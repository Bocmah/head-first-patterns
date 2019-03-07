<?php

namespace Patterns\Strategy\Ducks;

use Patterns\Strategy\Ducks\Fly\FlyWithWings;
use Patterns\Strategy\Ducks\Quack\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackStrategy = new Quack();
        $this->flyStrategy = new FlyWithWings();
    }

    public function display()
    {
        echo "I'm a real Mallard duck"  . "\n";
    }
}