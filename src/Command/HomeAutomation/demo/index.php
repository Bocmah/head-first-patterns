<?php

use Patterns\Command\HomeAutomation\RemoteControl;
use Patterns\Command\HomeAutomation\Devices\CeilingFan;
use Patterns\Command\HomeAutomation\Devices\GarageDoor;
use Patterns\Command\HomeAutomation\Devices\Light;
use Patterns\Command\HomeAutomation\Devices\Stereo;
use Patterns\Command\HomeAutomation\Commands\CeilingFanOnCommand;
use Patterns\Command\HomeAutomation\Commands\CeilingFanOffCommand;
use Patterns\Command\HomeAutomation\Commands\GarageDoorUpCommand;
use Patterns\Command\HomeAutomation\Commands\GarageDoorDownCommand;
use Patterns\Command\HomeAutomation\Commands\LightOnCommand;
use Patterns\Command\HomeAutomation\Commands\LightOffCommand;
use Patterns\Command\HomeAutomation\Commands\StereoOnWithCdCommand;
use Patterns\Command\HomeAutomation\Commands\StereoOffCommand;

require __DIR__ . '/../../../../bootstrap.php';

$remote = new RemoteControl();
$livingRoomLight = new Light('Living Room');
$kitchenLight = new Light('Kitchen');
$ceilingFan = new CeilingFan('Living Room');
$garageDoor = new GarageDoor('');
$stereo = new Stereo('');

$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);
$kitchenLightOn = new LightOnCommand($kitchenLight);
$kitchenLightOff = new LightOffCommand($kitchenLight);

$ceilingFanOn = new CeilingFanOnCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

$garageDoorUp = new GarageDoorUpCommand($garageDoor);
$garageDoorDown = new GarageDoorDownCommand($garageDoor);

$stereoOnWithCD = new StereoOnWithCdCommand($stereo);
$stereoOff = new StereoOffCommand($stereo);

$remote->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remote->setCommand(1, $kitchenLightOn, $kitchenLightOff);
$remote->setCommand(2, $ceilingFanOn, $ceilingFanOff);
$remote->setCommand(3, $stereoOnWithCD, $stereoOff);

echo $remote;

$remote->onButtonWasPushed(0);
$remote->offButtonWasPushed(0);
$remote->onButtonWasPushed(1);
$remote->offButtonWasPushed(1);
$remote->onButtonWasPushed(2);
$remote->offButtonWasPushed(2);
$remote->onButtonWasPushed(3);
$remote->offButtonWasPushed(3);