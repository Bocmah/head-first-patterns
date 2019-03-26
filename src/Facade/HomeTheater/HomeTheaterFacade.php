<?php

namespace Patterns\Facade\HomeTheater;

use Patterns\Facade\HomeTheater\Devices\Amplifier;
use Patterns\Facade\HomeTheater\Devices\CdPlayer;
use Patterns\Facade\HomeTheater\Devices\DvdPlayer;
use Patterns\Facade\HomeTheater\Devices\PopcornPopper;
use Patterns\Facade\HomeTheater\Devices\Projector;
use Patterns\Facade\HomeTheater\Devices\Screen;
use Patterns\Facade\HomeTheater\Devices\TheaterLights;
use Patterns\Facade\HomeTheater\Devices\Tuner;

class HomeTheaterFacade
{
    /**
     * @var Amplifier
     */
    private $amp;
    /**
     * @var Tuner
     */
    private $tuner;
    /**
     * @var DvdPlayer
     */
    private $dvd;
    /**
     * @var CdPlayer
     */
    private $cd;
    /**
     * @var Projector
     */
    private $projector;
    /**
     * @var TheaterLights
     */
    private $lights;
    /**
     * @var Screen
     */
    private $screen;
    /**
     * @var PopcornPopper
     */
    private $popper;

    public function __construct(
        Amplifier $amp,
        Tuner $tuner,
        DvdPlayer $dvd,
        CdPlayer $cd,
        Projector $projector,
        TheaterLights $lights,
        Screen $screen,
        PopcornPopper $popper
    ) {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->lights = $lights;
        $this->screen = $screen;
        $this->popper = $popper;
    }

    public function watchMovie(string $movie)
    {
        echo 'Get ready to watch a movie...' . "\n";
        $this->popper->on();
        $this->popper->pop();
        $this->lights->dim(10);
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->amp->setDvd($this->dvd);
        $this->amp->setSurroundSound();
        $this->amp->setVolume(5);
        $this->dvd->on();
        $this->dvd->play($movie);
    }

    public function endMovie()
    {
        echo 'Shutting movie theater down...' . "\n";
        $this->popper->off();
        $this->lights->on();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->stop();
        $this->dvd->eject();
        $this->dvd->off();
    }
}