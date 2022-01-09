<?php

use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    protected $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Math();
    }

    public function test_should_sum_number_negative_with_positive()
    {
        //Act
        $result = $this->calculator->sum(4,-5);

        //Assert
        $this->assertEquals(-1,$result);
    }

    public function test_should_sum_two_numbers_negatives()
    {
        //Act
        $result = $this->calculator->sum(-5,-5);

        //Assert
        $this->assertEquals(-10,$result);
    }

    public function test_should_sum_two_numbers_positives()
    {
        //Act
        $result = $this->calculator->sum(5,5);

        //Assert
        $this->assertEquals(10,$result);
    }

    public function test_should_sum_number_with_number_zero()
    {
        //Act
        $result = $this->calculator->sum(5,0);

        //Assert
        $this->assertEquals(5,$result);
    }

    public function test_should_multiply_two_numbers_negatives()
    {
        $result = $this->calculator->multiply(-7,-5);

        $this->assertEquals(35,$result);
    }

    public function test_should_multiply_number_positive_and_negative()
    {
        $result = $this->calculator->multiply(2,-6);

        $this->assertEquals(-12,$result);
    }

    public function test_should_multiply_two_numbers_positives()
    {
        $result = $this->calculator->multiply(2,2);

        $this->assertEquals(4,$result);
    }

    public function test_should_multiply_number_to_zero()
    {
        $result = $this->calculator->multiply(2,0);

        $this->assertEquals(0,$result);
    }
}