<?php

namespace Patterns\Game\Weapon;

class KnifeStrategy implements WeaponStrategy
{
    /**
     * @inheritdoc
     */
    public function useWeapon(): void
    {
        echo 'Cut with a knife' . "\n";
    }
}