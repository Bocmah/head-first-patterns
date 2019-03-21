<?php

namespace Patterns\Factory\Pizzas\Pizza;

use Patterns\Factory\Pizza\Pizzas\Pizza;
use Patterns\Factory\Pizza\SimplePizzaFactory;

class PizzaStore
{
    /**
     * @var SimplePizzaFactory
     */
    private $pizzaFactory;

    public function __construct(SimplePizzaFactory $pizzaFactory)
    {
        $this->pizzaFactory = $pizzaFactory;
    }

    /**
     * @param string $type
     * @return Pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->pizzaFactory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}