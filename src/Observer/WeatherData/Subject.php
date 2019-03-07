<?php

namespace Patterns\Observer\WeatherData;

interface Subject
{
    /**
     * @param Observer $o
     *
     * @return void
     */
    public function registerObserver(Observer $o): void;

    /**
     * @param Observer $o
     *
     * @return void
     */
    public function removeObserver(Observer $o): void;

    /**
     * @return void
     */
    public function notifyObservers(): void;
}