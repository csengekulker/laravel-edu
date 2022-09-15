<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [ Test::class, 'index']);


Route::get('/about', [ ServiceController::class, 'index']);

Route::get('/admin/about', function () {
    return view(
        'admin/about_admin', 
        [ 'names' => [
            "Bela", "Pista", "John", "Doe"
        ]]
    );
});

Route::get('/products', function () {
    return view('templates.products');
});

Route::get('/new', [ StudentController::class, 'newStudent']);

Route::post('/students', [ StudentController::class, 'submitStudent']);


Route::get('/newcar', [ CarController::class, 'newCar']);

Route::post('/cars', [ CarController::class, 'submitCar']);
