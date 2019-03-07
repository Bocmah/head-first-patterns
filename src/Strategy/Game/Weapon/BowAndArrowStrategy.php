<?php

namespace Patterns\Game\Weapon;

class BowAndArrowStrategy implements WeaponStrategy
{
    /**
     * @inheritdoc
     */
    public function useWeapon(): void
    {
        echo 'Shoot an arrow with a bow' . "\n";
    }
}