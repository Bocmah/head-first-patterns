<?php

namespace Patterns\Factory\Pizza\FactoryMethod;

use Patterns\Factory\Pizza\Pizzas\Chicago;
use Patterns\Factory\Pizza\Pizzas\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        switch ($type) {
            case 'cheese':
                $pizza = new Chicago\ChicagoStyleCheesePizza();
                break;
            case 'pepperoni':
                $pizza = new Chicago\ChicagoStylePepperoniPizza();
                break;
            case 'clam':
                $pizza = new Chicago\ChicagoStyleClamPizza();
                break;
            case 'veggie':
                $pizza = new Chicago\ChicagoStyleVeggiePizza();
                break;
        }

        return $pizza;
    }
}