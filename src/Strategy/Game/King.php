<?php

namespace Patterns\Game;

use Patterns\Game\Weapon\SwordStrategy;

class King extends Character
{
    public function __construct()
    {
        $this->weapon = new SwordStrategy();
    }

    public function fight()
    {
        echo 'Fighting like a king' . "\n";
    }
}