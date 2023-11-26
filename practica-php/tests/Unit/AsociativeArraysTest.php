<?php

namespace Tests\Unit;

use App\Http\Controllers\AsociativeArrays;
use PHPUnit\Framework\TestCase;

class AsociativeArraysTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_is_array()
    {
        $param = "manzana,pera,uva";
        $array = (new AsociativeArrays())->changeStringToArrayWithExplode($param);
        $this->assertIsArray($array, "this variable is not array");
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function test_is_not_array()
    {
        $param = ['manzana', 'pera', 'uva'];
        $notArray = (new AsociativeArrays())->changeArrayToStringWithImplode($param);
        $this->assertIsNotArray($notArray, "this variable is not string");
    }
}
