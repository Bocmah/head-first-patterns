<?php

namespace Patterns\Observer\WeatherData;

interface DisplayElement
{
    /**
     * @return void
     */
    public function display(): void;
}