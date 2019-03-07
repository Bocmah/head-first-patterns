<?php

namespace Patterns\Game\Weapon;

interface WeaponStrategy
{
    /**
     * @return void
     */
    public function useWeapon(): void;
}