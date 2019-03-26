<?php

namespace Patterns\Adapter\Ducks;

class WildTurkey implements Turkey
{
    public function gobble()
    {
        echo 'Gobble gobble' . "\n";
    }

    public function fly()
    {
        echo "I'm flying a short distance" . "\n";
    }
}