<?php

namespace Patterns\Factory\Pizza\Pizzas\NewYork;

use Patterns\Factory\Pizza\Pizzas\Pizza;

class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Sauce and Cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
    }
}