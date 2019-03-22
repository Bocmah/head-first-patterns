<?php

namespace Patterns\Factory\Pizza\Pizzas;

use Patterns\Factory\Pizza\Ingredients\Cheese;
use Patterns\Factory\Pizza\Ingredients\Clams;
use Patterns\Factory\Pizza\Ingredients\Dough;
use Patterns\Factory\Pizza\Ingredients\Pepperoni;
use Patterns\Factory\Pizza\Ingredients\Sauce;
use Patterns\Factory\Pizza\Ingredients\Veggies\Vegetable;

abstract class Pizza
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Dough
     */
    protected $dough;

    /**
     * @var Sauce
     */
    protected $sauce;

    /**
     * @var Vegetable[]
     */
    protected $veggies;

    /**
     * @var Cheese
     */
    protected $cheese;

    /**
     * @var Pepperoni
     */
    protected $pepperoni;

    /**
     * @var Clams
     */
    protected $clam;

    abstract public function prepare();

    public function bake()
    {
        echo 'Bake for 25 minutes at 350' . "\n";
    }

    public function cut()
    {
        echo 'Cutting the pizza into diagonal slices' . "\n";
    }

    public function box()
    {
        echo 'Place pizza in official PizzaStore box' . "\n";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
}