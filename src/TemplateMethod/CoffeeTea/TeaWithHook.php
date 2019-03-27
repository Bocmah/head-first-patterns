<?php

namespace Patterns\TemplateMethod\CoffeeTea;

class TeaWithHook extends CaffeineBeverageWithHook
{
    public function brew()
    {
        echo 'Steeping the tea...' . "\n";
    }

    public function addCondiments()
    {
        echo 'Adding Lemon...' . "\n";
    }
}