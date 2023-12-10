<?php

namespace Src\PracticalPhpCourse;

use App\Http\Controllers\Controller;

class ArithmeticsOperators extends Controller
{

    private $firstData;

    private $secondData;
    
    public function __construct($firstData, $secondData)
    {
        $this->firstData = $firstData;
        $this->secondData = $secondData;
    }

    /**
     * Undocumented function
     *
     * @return integer|float
     */
    public function sumOperator() : int|float
    {
        $resultSum = $this->firstData + $this->secondData;

        return $resultSum;
    }

    /**
     * Undocumented function
     *
     * @return integer|float
     */
    public function subtractOperator() : int|float
    {
        $resultSubtract = $this->firstData - $this->secondData;

        return $resultSubtract;
    }

    /**
     * Undocumented function
     *
     * @return integer|float
     */
    public function multiplicationOperator() : int|float 
    {
        $resultMult = $this->firstData * $this->secondData;

        return $resultMult;
    }

    /**
     * Undocumented function
     *
     * @return integer|float
     */
    public function divisionOperator() : int|float 
    {
        $resultDiv = $this->firstData / $this->secondData;

        return $resultDiv;
    }

    /**
     * Undocumented function
     *
     * @return integer|float
     */
    public function percentageOperator() : int|float
    {
        $resultPer = $this->firstData % $this->secondData;

        return $resultPer;
    }

    /**
     * Undocumented function
     *
     * @return integer|float
     */
    public function powerOperator() : int|float
    {
        $resultPow = $this->firstData ** $this->secondData;

        return $resultPow;
    }

}