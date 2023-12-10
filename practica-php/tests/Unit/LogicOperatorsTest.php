<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Src\PracticalPhpCourse\LogicOperators;

class LogicOperatorsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_and_operator_should_true()
    {
        $firstData = true;
        $secondData = true;

        $operatorAnd = (new LogicOperators($firstData, $secondData))->operatorAnd();

        if ($operatorAnd) {
            return $this->assertTrue($operatorAnd);
        }

    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_and_operator_should_false()
    {
        $firstData = true;
        $secondData = false;

        $operatorAnd = (new LogicOperators($firstData, $secondData))->operatorAnd();

        if (!$operatorAnd) {
            return $this->assertFalse($operatorAnd);
        }

    }

     /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_or_operator_should_true()
    {
        $firstData = true;
        $secondData = false;

        $operatorOr = (new LogicOperators($firstData, $secondData))->operatorOr();

        if ($operatorOr) {
            return $this->assertTrue($operatorOr);
        }

    }

     /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_or_operator_should_false()
    {
        $firstData = false;
        $secondData = false;

        $operatorOr = (new LogicOperators($firstData, $secondData))->operatorOr();

        if (!$operatorOr) {
            return $this->assertFalse($operatorOr);
        }

    }
}
