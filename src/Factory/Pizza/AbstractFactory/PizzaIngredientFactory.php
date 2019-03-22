<?php

namespace Patterns\Factory\Pizza\AbstractFactory;

use Patterns\Factory\Pizza\Ingredients\Cheese;
use Patterns\Factory\Pizza\Ingredients\Clams;
use Patterns\Factory\Pizza\Ingredients\Dough;
use Patterns\Factory\Pizza\Ingredients\Pepperoni;
use Patterns\Factory\Pizza\Ingredients\Sauce;
use Patterns\Factory\Pizza\Ingredients\Veggies\Vegetable;

interface PizzaIngredientFactory
{
    /**
     * @return Dough
     */
    public function createDough(): Dough;

    /**
     * @return Sauce
     */
    public function createSauce(): Sauce;

    /**
     * @return Cheese
     */
    public function createCheese(): Cheese;

    /**
     * @return Vegetable[]
     */
    public function createVeggies(): array;

    /**
     * @return Pepperoni
     */
    public function createPepperoni(): Pepperoni;

    /**
     * @return Clams
     */
    public function createClam(): Clams;
}