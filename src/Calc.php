<?php

namespace App;

class Calc
{

    /**
     * сумма
     */
    public function sum($a, $b)
    {
        return $a + $b;
    }

    /**
     * умножение
     */
    public function mul($a, $b)
    {
        return $a * $b;
    }


    /**
     * деление
     */
    public function div($a, $b)
    {
        return $a / $b;
    }


    /**
     * разность
     */
    public function dif($a, $b)
    {
        return $a - $b;
    }
}
