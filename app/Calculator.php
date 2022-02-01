<?php
namespace App;

class Calculator
{

    public function sum(int $a, int $b)
    {
        return intval($a + $b);
    }

    public function multiply(int $a, int $b)
    {
        return intval($a * $b);
    }

    public function subtract(int $a, int $b)
    {
        return intval($a - $b);
    }

    public function split(int $a, int $b)
    {
        return floor($a / $b);
    }
}