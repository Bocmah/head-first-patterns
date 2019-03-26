<?php

namespace Patterns\Adapter\Ducks;

class DuckAdapter implements Turkey
{
    /**
     * @var Duck
     */
    private $duck;

    public function __construct(Duck $duck)
    {
        $this->duck = $duck;
    }

    public function fly()
    {
        $this->duck->fly();
    }

    public function gobble()
    {
        $this->duck->quack();
    }
}