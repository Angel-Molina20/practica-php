<?php

namespace Src\PracticalPhpCourse;

use App\Http\Controllers\Controller;

class LogicOperators extends Controller
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
     * @return boolean
     */
    public function operatorAnd() : bool
    {
        $operatorResult = $this->firstData && $this->secondData;

        return $operatorResult;
    }

    /**
     * Undocumented function
     *
     * @return boolean
     */
    public function operatorOr() : bool 
    {
        $operatorResult = $this->firstData || $this->secondData;

        return $operatorResult;
    }
}
