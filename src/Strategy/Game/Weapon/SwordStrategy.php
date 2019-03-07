<?php

namespace Patterns\Game\Weapon;

class SwordStrategy implements WeaponStrategy
{
    /**
     * @inheritdoc
     */
    public function useWeapon(): void
    {
        echo 'Swing with a sword' . "\n";
    }
}