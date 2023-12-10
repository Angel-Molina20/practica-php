<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Src\PracticalPhpCourse\ArithmeticsOperators;

class ArithmeticsOperatorsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_sum_operator()
    {
        $firstNum = 2;
        $secondNum = 3;

        $result = (new ArithmeticsOperators($firstNum, $secondNum))->sumOperator();

        $this->assertEquals(5, $result, 'ERROR');

    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_subtract_operator()
    {
        $firstNum = 10;
        $secondNum = 5;

        $result = (new ArithmeticsOperators($firstNum, $secondNum))->subtractOperator();

        $this->assertEquals(5, $result, 'ERROR');
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_multiplication_operator()
    {
        $firstNum = -2;
        $secondNum = -2;

        $result = (new ArithmeticsOperators($firstNum, $secondNum))->multiplicationOperator();

        $this->assertEquals(4, $result, 'ERROR');
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_division_operator()
    {
        $firstNum = 10;
        $secondNum = 2;

        $result = (new ArithmeticsOperators($firstNum, $secondNum))->divisionOperator();

        $this->assertEquals(5, $result, 'ERROR');
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_percentage_operator()
    {
        $firstNum = 5;
        $secondNum = 2;

        $result = (new ArithmeticsOperators($firstNum, $secondNum))->percentageOperator();

        $this->assertEquals(1, $result, 'ERROR');
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_power_operator()
    {
        $firstNum = 5;
        $secondNum = 5;

        $result = (new ArithmeticsOperators($firstNum, $secondNum))->powerOperator();

        $this->assertEquals(3125, $result, 'ERROR');
    }
}
