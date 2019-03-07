<?php

namespace Patterns\Game\Weapon;

class AxeStrategy implements WeaponStrategy
{
    /**
     * @inheritdoc
     */
    public function useWeapon(): void
    {
        echo 'Chop with an axe' . "\n";
    }
}