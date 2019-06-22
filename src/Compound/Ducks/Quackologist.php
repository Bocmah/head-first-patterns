<?php

namespace Patterns\Compound\Ducks;

class Quackologist implements Observer
{
    public function update(QuackObservable $duck): void
    {
        echo "Quackologist: $duck just quacked" . PHP_EOL;
    }
}