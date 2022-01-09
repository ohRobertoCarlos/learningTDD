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

    public function test_should_multiply_number_by_zero()
    {
        $result = $this->calculator->multiply(2,0);

        $this->assertEquals(0,$result);
    }

    public function test_should_subtract_two_numbers_negatives()
    {
        $result = $this->calculator->subtract(-5,-6);

        $this->assertEquals(1,$result);
    }

    public function test_should_subtract_number_negative_and_positive()
    {
        $result = $this->calculator->subtract(5,-6);

        $this->assertEquals(11,$result);
    }

    public function test_should_subtract_two_numbers_positives()
    {
        $result = $this->calculator->subtract(5,2);

        $this->assertEquals(3,$result);
    }

    public function test_should_subtract_number_by_zero()
    {
        $result = $this->calculator->subtract(0,5);

        $this->assertEquals(-5,$result);
    }

    public function test_should_split_two_odd_numbers_and_return_integer_part()
    {
        $result = $this->calculator->split(7,3);

        $this->assertEquals(2,$result);
    }

    public function test_should_split_two_even_numbers()
    {
        $result = $this->calculator->split(8,2);

        $this->assertEquals(4,$result);
    }
}