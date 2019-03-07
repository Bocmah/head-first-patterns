<?php

namespace Patterns\Observer\WeatherData;

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var Subject
     */
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    /**
     * @param float $temp
     * @param float $humidity
     * @param float $pressure
     *
     * @return void
     */
    public function update(float $temp, float $humidity, float $pressure): void
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }

    /**
     * @return void
     */
    public function display(): void
    {
        echo "Current conditions " . $this->temperature . "F degrees and " . $this->humidity . "% humidity" . "\n";
    }
}