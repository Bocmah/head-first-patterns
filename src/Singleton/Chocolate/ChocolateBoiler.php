<?php

namespace Patterns\Singleton\Chocolate;

class ChocolateBoiler
{
    /**
     * @var bool
     */
    private $empty;

    /**
     * @var bool
     */
    private $boiled;

    /**
     * @var ChocolateBoiler
     */
    private static $instance = null;

    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            return new self();
        }

        return self::$instance;
    }

    public function fill()
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
            // fill the boiler with milk/chocolate mixture
        }
    }

    public function drain()
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            // drain the boiled milk and chocolate
            $this->empty = true;
        }
    }

    public function boil()
    {
        if (!$this->isEmpty() && !$this->isBoiled()) {
            // bring the contents to a boil
            $this->boiled = true;
        }
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->empty;
    }

    /**
     * @return bool
     */
    public function isBoiled()
    {
        return $this->boiled;
    }
}