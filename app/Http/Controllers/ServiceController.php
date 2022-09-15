<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {

        $name = "Bela";
        $email = "bela@mail.hu";

        return view( "about", compact("name", "email"));
    }
}
