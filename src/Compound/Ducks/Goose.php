<?php

namespace Patterns\Compound\Ducks;

class Goose
{
    public function honk(): void
    {
        echo 'Honk' . PHP_EOL;
    }
}