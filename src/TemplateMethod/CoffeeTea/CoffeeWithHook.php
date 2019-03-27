<?php

namespace Patterns\TemplateMethod\CoffeeTea;

class CoffeeWithHook extends CaffeineBeverageWithHook
{
    public function brew()
    {
        echo 'Dripping Coffee through filter...' . "\n";
    }

    public function addCondiments()
    {
        echo 'Adding Sugar and Milk...' . "\n";
    }

    public function customerWantsCondiments(): bool
    {
        return false;
    }
}