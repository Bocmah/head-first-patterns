<?php

namespace Patterns\Facade\HomeTheater\Devices;

class Screen
{
    public function up()
    {
        echo 'Turning the screen up...' . "\n";
    }

    public function down()
    {
        echo 'Turning the screen down...' . "\n";
    }
}