<?php

namespace Patterns\Compound\Ducks;

interface Observer
{
    public function update(QuackObservable $duck): void;
}