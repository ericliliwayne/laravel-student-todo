<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/greetings/{name}',fn(string $name)=> "Hello! $name ".date('Y-m-d h:i:s'));
Route::get('/user/{id}',fn(string $name)=> "Hello! $name ".date('Y-m-d h:i:s'))->where('id','[0~9]+'); //可以藉由 Regular Expression 去限制路由參數的型式
Route::resource('students', StudentController::class);
