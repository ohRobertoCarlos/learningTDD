<?php
namespace App;

class Math{

    public function sum(int $a, int $b)
    {
        return intval($a + $b);
    }

    public function multiply(int $a, int $b)
    {
        return intval($a * $b);
    }
}