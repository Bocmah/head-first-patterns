<?php

namespace Patterns\Factory\Pizza\AbstractFactory;

use Patterns\Factory\Pizza\Ingredients\Cheese;
use Patterns\Factory\Pizza\Ingredients\Chicago\FrozenClam;
use Patterns\Factory\Pizza\Ingredients\Chicago\Mozzarella;
use Patterns\Factory\Pizza\Ingredients\Chicago\PlumTomatoSauce;
use Patterns\Factory\Pizza\Ingredients\Chicago\SlicedPepperoni;
use Patterns\Factory\Pizza\Ingredients\Chicago\ThickCrustDough;
use Patterns\Factory\Pizza\Ingredients\Clams;
use Patterns\Factory\Pizza\Ingredients\Dough;
use Patterns\Factory\Pizza\Ingredients\Pepperoni;
use Patterns\Factory\Pizza\Ingredients\Sauce;
use Patterns\Factory\Pizza\Ingredients\Veggies\BlackOlives;
use Patterns\Factory\Pizza\Ingredients\Veggies\EggPlant;
use Patterns\Factory\Pizza\Ingredients\Veggies\Spinach;
use Patterns\Factory\Pizza\Ingredients\Veggies\Vegetable;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    /**
     * @return ThickCrustDough
     */
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    /**
     * @return PlumTomatoSauce
     */
    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    /**
     * @return Mozzarella
     */
    public function createCheese(): Cheese
    {
        return new Mozzarella();
    }

    /**
     * @return Vegetable[]
     */
    public function createVeggies(): array
    {
        return [
            new BlackOlives(),
            new Spinach(),
            new EggPlant()
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
     * @return FrozenClam
     */
    public function createClam(): Clams
    {
        return new FrozenClam();
    }
}