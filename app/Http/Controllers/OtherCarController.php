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

    public function update() {
        DB::table('cars')->where('id', 3)->update([
            "brand" => "Opel"
        ]);
    }

    public function update_or_insert() {
        DB::table('cars')->updateOrInsert(
        [ //this is the base of comparison
            "brand" => "ilyentutinincs",
            "productyear" => "1987",
            "color_id" => 3
        ],
        
        [ // this is to be inserted if no match, above record updated if match
            "brand" => "SosekOpel",
            "productyear" => "2002",
            "color_id" => 1
        ]);
    }
}
