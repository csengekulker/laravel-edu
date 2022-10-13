<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OtherCarController extends Controller
{

    public function insert_all() {

        $last_id = DB::table('colors')->insertGetId(
            ['color' => "green"]
        );

        DB::table('cars')->insert(
            ['brand' => 'Szuszka', 'productyear' => '1984', 'color_id' => $last_id]
        );

    }

    public function select_all() {
        $result = DB::table('cars')->select(
            "cars.brand as Marka",
            "cars.productyear as Evjarat",
            'colors.color as Szin'
        )->join( "colors", "cars.color_id", "=", "colors.id")->get();

        echo "<pre>";
        print_r($result);

        $result = DB::table('cars')->select(
            "cars.productyear as Evjarat",
            'colors.color as Szin'
        )->join("colors", "cars.color_id", "=", "colors.id")
        ->where("cars.brand", "=", "Szuszka")->get();

        echo "<pre>";
        print_r($result);
    }
}
