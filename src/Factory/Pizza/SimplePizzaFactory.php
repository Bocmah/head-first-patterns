<?php

namespace Patterns\Factory\Pizza;

use Patterns\Factory\Pizza\Pizzas\CheesePizza;
use Patterns\Factory\Pizza\Pizzas\ClamPizza;
use Patterns\Factory\Pizza\Pizzas\PepperoniPizza;
use Patterns\Factory\Pizza\Pizzas\VeggiePizza;

class SimplePizzaFactory
{
    /**
     * @param string $type
     * @return null|CheesePizza|ClamPizza|PepperoniPizza|VeggiePizza
     */
    public function createPizza(string $type)
    {
        $pizza = null;

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza();
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;
            case 'clam':
                $pizza = new ClamPizza();
                break;
            case 'veggie':
                $pizza = new VeggiePizza();
                break;
        }

        return $pizza;
    }
}