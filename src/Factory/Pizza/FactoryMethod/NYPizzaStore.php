<?php

namespace Patterns\Factory\Pizza\FactoryMethod;

use Patterns\Factory\Pizza\Pizzas\NewYork;
use Patterns\Factory\Pizza\Pizzas\Pizza;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        switch ($type) {
            case 'cheese':
                $pizza = new NewYork\NYStyleCheesePizza();
                break;
            case 'pepperoni':
                $pizza = new NewYork\NYStylePepperoniPizza();
                break;
            case 'clam':
                $pizza = new NewYork\NYStyleClamPizza();
                break;
            case 'veggie':
                $pizza = new NewYork\NYStyleVeggiePizza();
                break;
        }

        return $pizza;
    }
}