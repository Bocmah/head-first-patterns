<?php

namespace Patterns\Observer\WeatherData;

interface Observer
{
    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     *
     * @return void
     */
    public function update(float $temp, float $humidity, float $pressure): void;
}