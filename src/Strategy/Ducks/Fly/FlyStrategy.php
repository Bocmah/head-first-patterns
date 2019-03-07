<?php

namespace Patterns\Strategy\Ducks\Fly;

interface FlyStrategy
{
    /**
     * @return void
     */
    public function fly(): void;
}