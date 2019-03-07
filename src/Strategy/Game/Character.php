<?php

namespace Patterns\Game;

use Patterns\Game\Weapon\WeaponStrategy;

abstract class Character
{
    /**
     * @var WeaponStrategy
     */
    protected $weapon;

    /**
     * @param WeaponStrategy $w
     */
    public function setWeapon(WeaponStrategy $w)
    {
        $this->weapon = $w;
    }

    abstract public function fight();
}