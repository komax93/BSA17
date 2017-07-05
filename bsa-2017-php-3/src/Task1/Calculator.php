<?php

namespace BinaryStudioAcademy\Task1;

class Calculator
{
    public function add(int $a, int $b) : int
    {
        return $a + $b;
    }

    public function subtract(int $a, int $b) : int
    {
        return $a - $b;
    }

    public function multiply(int $a, int $b) : int
    {
        return $a * $b;
    }

    public function divide(int $a, int $b) : int
    {
        if($b == 0) {
            throw new \DivisionByZeroError();
        }

        return $a / $b;
    }

    public function pow2(int $n) : int
    {
        return pow(2, $n);
    }
}
