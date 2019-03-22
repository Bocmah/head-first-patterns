<?php

namespace Patterns\Factory\Pizza\FactoryMethod;

use Patterns\Factory\Pizza\AbstractFactory\ChicagoPizzaIngredientFactory;
use Patterns\Factory\Pizza\Pizzas\CheesePizza;
use Patterns\Factory\Pizza\Pizzas\ClamPizza;
use Patterns\Factory\Pizza\Pizzas\PepperoniPizza;
use Patterns\Factory\Pizza\Pizzas\Pizza;
use Patterns\Factory\Pizza\Pizzas\VeggiePizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('Chicago Style Cheese Pizza');
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName('Chicago Style Pepperoni Pizza');
                break;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('Chicago Style Clam Pizza');
                break;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('Chicago Style Veggie Pizza');
                break;
        }

        return $pizza;
    }
}