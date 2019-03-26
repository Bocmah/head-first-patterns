<?php

namespace Patterns\Adapter\Ducks;

class TurkeyAdapter implements Duck
{
    /**
     * @var Turkey
     */
    private $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        for ($i = 0; $i < 5; $i++) {
            $this->turkey->fly();
        }
    }
}