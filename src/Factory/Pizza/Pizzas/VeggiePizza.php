<?php

namespace Patterns\Factory\Pizza\Pizzas;

use Patterns\Factory\Pizza\AbstractFactory\PizzaIngredientFactory;

class VeggiePizza extends Pizza
{
    /**
     * @var PizzaIngredientFactory
     */
    private $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        echo "Preparing " . $this->name . "\n";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->veggies = $this->ingredientFactory->createVeggies();
    }
}