<?php

namespace App\Http\Controllers;

use App\FizzBuzz;
use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        foreach (range(1, 20) as $number) {
            if(0 !== $number % 3 && 0 !== $number % 5) {
                echo $number.'<br>';
                continue;
            }

            if(0 === $number % 3) {
                echo 'Fizz';
            }

            if(0 === $number % 5) {
                echo 'Buzz';
            }

            echo '<br>';
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\FizzBuzz  $fizzBuzz
     * @return \Illuminate\Http\Response
     */
    public function show(FizzBuzz $fizzBuzz)
    {
        //
    }

}
