<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number = 10;
        for ($counter = 0; $counter < $number; $counter++) {
            echo $this->fibonacci($counter), ' ';
        }
    }

    private function fibonacci($number){

        if ($number === 0)
            return 0;
        elseif ($number === 1)
            return 1;
        else
            return ($this->fibonacci($number-1) +
                $this->fibonacci($number-2));
    }

}
