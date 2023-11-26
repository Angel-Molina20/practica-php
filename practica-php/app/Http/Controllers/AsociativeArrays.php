<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsociativeArrays extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function __invoke()
    {
        return response()->json([
            'menssage' => "Welcome to the project practice: ". env('APP_NAME'),
        ]);
    }


    /**
     * Undocumented function
     *
     * @param string $name
     * @return integer
     */
    public function getAgeByName(string $name): int
    {
        $ages = [
            'juan' => 25,
            'maria' => 30,
            'pedro' => 22,
        ];

        return $ages[$name];
    }

    /**
     * Undocumented function
     *
     * @param string $param
     * @return array
     */
    public function changeStringToArrayWithExplode(string $param) : array
    {
        $array = explode(',', $param);

        return $array;
    }

    /**
     * Undocumented function
     *
     * @param array $param
     * @return string
     */
    public function changeArrayToStringWithImplode(array $param) : string
    {
        $string = implode(',', $param);

        return $string;
    }
 
}
