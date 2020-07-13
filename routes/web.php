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
//demo view
Route::get('test', function () {
    return view('test');
});
//Gọi controller
Route::get('GoiController','MyController@Xinchao');
//truyền tham số cho controller
Route::get('Khoahoc/{ten}','MyController@Khoahoc');
//Insert data with laravel framework
Route::resource('student','StudentController');