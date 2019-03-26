<?php

namespace Patterns\Command\HomeAutomation\Commands;

use Patterns\Command\HomeAutomation\Devices\CeilingFan;

class CeilingFanMediumCommand implements Command
{
    /**
     * @var CeilingFan
     */
    private $fan;

    /**
     * @var int
     */
    private $prevSpeed;

    public function __construct(CeilingFan $fan)
    {
        $this->fan = $fan;
    }

    public function execute()
    {
        $this->prevSpeed = $this->fan->getSpeed();
        $this->fan->medium();
    }

    public function undo()
    {
        if ($this->prevSpeed == $this->fan::HIGH) {
            $this->fan->high();
        } elseif ($this->prevSpeed == $this->fan::MEDIUM) {
            $this->fan->medium();
        } elseif ($this->prevSpeed == $this->fan::LOW) {
            $this->fan->low();
        } elseif ($this->prevSpeed == $this->fan::OFF) {
            $this->fan->off();
        }
    }
}