<?php

namespace Patterns\Factory\Pizza\FactoryMethod;

use Patterns\Factory\Pizza\AbstractFactory\NYPizzaIngredientFactory;
use Patterns\Factory\Pizza\Pizzas\CheesePizza;
use Patterns\Factory\Pizza\Pizzas\ClamPizza;
use Patterns\Factory\Pizza\Pizzas\PepperoniPizza;
use Patterns\Factory\Pizza\Pizzas\Pizza;
use Patterns\Factory\Pizza\Pizzas\VeggiePizza;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;
        $ingredientFactory = new NYPizzaIngredientFactory();

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('New York Style Cheese Pizza');
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName('New York Style Pepperoni Pizza');
                break;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('New York Style Clam Pizza');
                break;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('New York Style Veggie Pizza');
                break;
        }

        return $pizza;
    }
}