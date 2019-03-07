<?php

namespace Patterns\Observer\WeatherData;

use SplObjectStorage;

class WeatherData implements Subject
{
    /**
     * @var SplObjectStorage
     */
    private $observers;

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @return void
     */
    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    /**
     * @param Observer $o
     *
     * @return void
     */
    public function registerObserver(Observer $o): void
    {
        $this->observers->attach($o);
    }

    /**
     * @param Observer $o
     *
     * @return void
     */
    public function removeObserver(Observer $o): void
    {
        $this->observers->detach($o);
    }

    /**
     * @return void
     */
    public function measurementsChanged()
    {
        $this->notifyObservers();
    }

    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     *
     * @return void
     */
    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }
}