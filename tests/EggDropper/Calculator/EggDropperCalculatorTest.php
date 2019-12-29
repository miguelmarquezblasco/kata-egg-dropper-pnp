<?php

namespace App\Tests\EggDropper\Calculator;

use App\Context\EggDropper\Calculator\EggDropperCalculator;
use PHPUnit\Framework\TestCase;

class EggDropperCalculatorTest extends TestCase
{
    /**
     * Casos en los que existe menos de 1 huevo o planta
     */
    public function testMin()
    {
        $this->assertEquals(0, EggDropperCalculator::calculate(0, 0));
        $this->assertEquals(0, EggDropperCalculator::calculate(1, 0));
        $this->assertEquals(1, EggDropperCalculator::calculate(0, 1));
        $this->assertEquals(1, EggDropperCalculator::calculate(1, 1));
        $this->assertEquals(0, EggDropperCalculator::calculate(2, 0));
        $this->assertEquals(0, EggDropperCalculator::calculate(0, 2));
        $this->assertEquals(1, EggDropperCalculator::calculate(2, 1));
        $this->assertEquals(2, EggDropperCalculator::calculate(1, 2));
    }

    /**
     * Casos en los que existe más de 1 huevo y planta
     */
    public function test()
    {
        $this->assertEquals(4, EggDropperCalculator::calculate(5, 15));
        $this->assertEquals(6, EggDropperCalculator::calculate(15, 45));
        $this->assertEquals(7, EggDropperCalculator::calculate(45, 127));
        $this->assertEquals(6, EggDropperCalculator::calculate(127, 45));
        $this->assertEquals(4, EggDropperCalculator::calculate(45, 15));
        $this->assertEquals(3, EggDropperCalculator::calculate(15, 5));
    }
}
