<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OtherCarController;

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


// 2022.10.13
Route::get("/insertcar", [ OtherCarController::class, 'insert_all']);

Route::get("/selectcar", [ OtherCarController::class, 'select_all']);

Route::get('/updatecar', [ OtherCarController::class, 'update']);

route::get('/upin', [ OtherCarController::class, 'update_or_insert']);

Route::get('/del', [ OtherCarController::class, 'delete']);

// 2022.10.20

// 2022.10.27

Route::get('/diakok', [ StudentController::class, 'getStudent']);