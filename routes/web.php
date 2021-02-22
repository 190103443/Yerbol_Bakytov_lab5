<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/user/{number1}/{sign}/{number2}','CalculatorController@operation');
//Route::get('/name/{name}','StudentController@names');
Route::get('/age/{age}','StudentController@get_age');
Route::get('/date/{date}','StudentController@get_date');
Route::get('/name/{id}','StudentController@show');