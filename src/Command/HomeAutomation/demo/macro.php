<?php

use Patterns\Command\HomeAutomation\Devices\Light;
use Patterns\Command\HomeAutomation\Devices\TV;
use Patterns\Command\HomeAutomation\Devices\Stereo;
use Patterns\Command\HomeAutomation\Devices\Hottub;
use Patterns\Command\HomeAutomation\Commands\LightOnCommand;
use Patterns\Command\HomeAutomation\Commands\LightOffCommand;
use Patterns\Command\HomeAutomation\Commands\StereoOnCommand;
use Patterns\Command\HomeAutomation\Commands\StereoOffCommand;
use Patterns\Command\HomeAutomation\Commands\TVOnCommand;
use Patterns\Command\HomeAutomation\Commands\TVOffCommand;
use Patterns\Command\HomeAutomation\Commands\HottubOnCommand;
use Patterns\Command\HomeAutomation\Commands\HottubOffCommand;
use Patterns\Command\HomeAutomation\Commands\MacroCommand;
use Patterns\Command\HomeAutomation\RemoteControlWithUndo;

require __DIR__ . '/../../../../bootstrap.php';

$remote = new RemoteControlWithUndo();

$light = new Light('Living Room');
$tv = new TV('Living Room');
$stereo = new Stereo('Living Room');
$hottub = new Hottub();

$lightOn = new LightOnCommand($light);
$lightOff = new LightOffCommand($light);
$stereoOn = new StereoOnCommand($stereo);
$stereoOff = new StereoOffCommand($stereo);
$tvOn = new TVOnCommand($tv);
$tvOff = new TVOffCommand($tv);
$hottubOn = new HottubOnCommand($hottub);
$hottubOff = new HottubOffCommand($hottub);

$partyOn = SplFixedArray::fromArray([$lightOn, $stereoOn, $tvOn, $hottubOn]);
$partyOff = SplFixedArray::fromArray([$lightOff, $stereoOff, $tvOff, $hottubOff]);

$partyOnMacro = new MacroCommand($partyOn);
$partyOffMacro = new MacroCommand($partyOff);

$remote->setCommand(0, $partyOnMacro, $partyOffMacro);

echo $remote;
echo '--- Pushing Macro On ---' . "\n";
$remote->onButtonWasPushed(0);
echo '--- Pushing Macro Off ---' . "\n";
$remote->offButtonWasPushed(0);

