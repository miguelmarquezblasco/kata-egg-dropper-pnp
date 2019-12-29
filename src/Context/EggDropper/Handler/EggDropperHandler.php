<?php

namespace App\Context\EggDropper\Handler;

use App\Context\EggDropper\Calculator\EggDropperCalculator;

class EggDropperHandler
{
    /**
     * Basic (1 egg, 100 floors)
     */
    public function minEggDropper100(): int
    {
        return EggDropperCalculator::calculate(1, 100);
    }

    /**
     * Intermediate (2 eggs, 100 floors)
     */
    public function minEggDropper2(): int
    {
        return EggDropperCalculator::calculate(2, 100);
    }

    /**
     * Hard (n eggs, n floors)
     */
    public function minEggDropperX(int $eggs, int $floors): int
    {
        return EggDropperCalculator::calculate($eggs, $floors);
    }
}
