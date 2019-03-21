<?php

namespace Patterns\Factory\Pizza\FactoryMethod;

use Patterns\Factory\Pizza\Pizzas\California;
use Patterns\Factory\Pizza\Pizzas\Pizza;

class CaliforniaPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        switch ($type) {
            case 'cheese':
                $pizza = new California\CaliforniaStyleCheesePizza();
                break;
            case 'pepperoni':
                $pizza = new California\CaliforniaStylePepperoniPizza();
                break;
            case 'clam':
                $pizza = new California\CaliforniaStyleClamPizza();
                break;
            case 'veggie':
                $pizza = new California\CaliforniaStyleVeggiePizza();
                break;
        }

        return $pizza;
    }
}