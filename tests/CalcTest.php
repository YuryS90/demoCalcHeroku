<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Calc;

class СalcTest extends TestCase
{
    public function testСalc()
    {
        $calc = new Calc();

        // $this->expectExceptionCode(
        //     $age->convAge(160*365)
        // );

        $this->assertSame(
            5,
            $calc->sum(2, 3)
        );

        $this->assertSame(
            6,
            $calc->mul(2, 3)
        );
    }
}
