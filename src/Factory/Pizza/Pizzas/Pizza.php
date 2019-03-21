<?php

namespace Patterns\Factory\Pizza\Pizzas;

abstract class Pizza
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $dough;

    /**
     * @var string
     */
    protected $sauce;

    /**
     * @var array
     */
    protected $toppings;

    public function prepare()
    {
        echo 'Preparing ' . $this->name . "\n";
        echo 'Tossing dough...' . "\n";
        echo "Adding sauce..." . "\n";
        echo "Adding toppings: " . "\n";

        foreach ($this->toppings as $topping) {
            echo "  " . $topping . "\n";
        }
    }

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
}