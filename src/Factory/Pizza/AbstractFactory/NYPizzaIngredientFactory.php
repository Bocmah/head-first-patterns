<?php

namespace Patterns\Factory\Pizza\AbstractFactory;

use Patterns\Factory\Pizza\Ingredients\Cheese;
use Patterns\Factory\Pizza\Ingredients\Clams;
use Patterns\Factory\Pizza\Ingredients\NewYork\FreshClams;
use Patterns\Factory\Pizza\Ingredients\NewYork\MarinaraSauce;
use Patterns\Factory\Pizza\Ingredients\NewYork\ReggianoCheese;
use Patterns\Factory\Pizza\Ingredients\NewYork\SlicedPepperoni;
use Patterns\Factory\Pizza\Ingredients\NewYork\ThinCrustDough;
use Patterns\Factory\Pizza\Ingredients\Dough;
use Patterns\Factory\Pizza\Ingredients\Pepperoni;
use Patterns\Factory\Pizza\Ingredients\Sauce;
use Patterns\Factory\Pizza\Ingredients\Veggies\Garlic;
use Patterns\Factory\Pizza\Ingredients\Veggies\Mushroom;
use Patterns\Factory\Pizza\Ingredients\Veggies\Onion;
use Patterns\Factory\Pizza\Ingredients\Veggies\RedPepper;
use Patterns\Factory\Pizza\Ingredients\Veggies\Vegetable;

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    /**
     * @return ThinCrustDough
     */
    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    /**
     * @return MarinaraSauce
     */
    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    /**
     * @return ReggianoCheese
     */
    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    /**
     * @return Vegetable[]
     */
    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper()
        ];
    }

    /**
     * @return SlicedPepperoni
     */
    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    /**
     * @return FreshClams
     */
    public function createClam(): Clams
    {
        return new FreshClams();
    }
}