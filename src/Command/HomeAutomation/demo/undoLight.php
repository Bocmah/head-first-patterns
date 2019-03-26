<?php

use Patterns\Command\HomeAutomation\RemoteControlWithUndo;
use Patterns\Command\HomeAutomation\Devices\Light;
use Patterns\Command\HomeAutomation\Commands\LightOnCommand;
use Patterns\Command\HomeAutomation\Commands\LightOffCommand;

require __DIR__ . '/../../../../bootstrap.php';

$remote = new RemoteControlWithUndo();

$livingRoomLight = new Light('Living Room');

$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);

$remote->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);

$remote->onButtonWasPushed(0);
$remote->offButtonWasPushed(0);
echo $remote;

$remote->undoButtonWasPushed();
$remote->offButtonWasPushed(0);
$remote->onButtonWasPushed(0);
echo $remote;

$remote->undoButtonWasPushed();