<?php

use Patterns\Command\HomeAutomation\RemoteControlWithUndo;
use Patterns\Command\HomeAutomation\Devices\CeilingFan;
use Patterns\Command\HomeAutomation\Commands\CeilingFanHighCommand;
use Patterns\Command\HomeAutomation\Commands\CeilingFanOffCommand;
use Patterns\Command\HomeAutomation\Commands\CeilingFanMediumCommand;

require __DIR__ . '/../../../../bootstrap.php';

$remote = new RemoteControlWithUndo();

$ceilingFan = new CeilingFan('Living Room');

$ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
$ceilingFanHigh = new CeilingFanHighCommand($ceilingFan);
$ceilingFanOff = new CeilingFanOffCommand($ceilingFan);

$remote->setCommand(0, $ceilingFanMedium, $ceilingFanOff);
$remote->setCommand(1, $ceilingFanHigh, $ceilingFanOff);

$remote->onButtonWasPushed(0);
$remote->offButtonWasPushed(0);
echo $remote;
$remote->undoButtonWasPushed();

$remote->onButtonWasPushed(1);
echo $remote;
$remote->undoButtonWasPushed();