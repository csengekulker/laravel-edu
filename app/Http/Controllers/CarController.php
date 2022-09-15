<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function newCar () {
        return view('new_car');
    }

    public function submitCar (Request $request ) {
        print_r($request -> all());
    }
}
