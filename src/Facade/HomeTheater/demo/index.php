<?php

use Patterns\Facade\HomeTheater\HomeTheaterFacade;
use Patterns\Facade\HomeTheater\Devices\Amplifier;
use Patterns\Facade\HomeTheater\Devices\Tuner;
use Patterns\Facade\HomeTheater\Devices\DvdPlayer;
use Patterns\Facade\HomeTheater\Devices\CdPlayer;
use Patterns\Facade\HomeTheater\Devices\Projector;
use Patterns\Facade\HomeTheater\Devices\Screen;
use Patterns\Facade\HomeTheater\Devices\TheaterLights;
use Patterns\Facade\HomeTheater\Devices\PopcornPopper;

require __DIR__ . '/../../../../bootstrap.php';

$amp = new Amplifier();
$tuner = new Tuner();
$dvd = new DvdPlayer();
$cd = new CdPlayer();
$projector = new Projector($dvd);
$screen = new Screen();
$lights = new TheaterLights();
$popper = new PopcornPopper();

$homeTheaterFacade = new HomeTheaterFacade(
    $amp,
    $tuner,
    $dvd,
    $cd,
    $projector,
    $lights,
    $screen,
    $popper
);

$homeTheaterFacade->watchMovie('Raiders of the Lost Ark');
$homeTheaterFacade->endMovie();