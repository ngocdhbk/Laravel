<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return "Hello";
});

Route::get('/test2/{hoten}', function(){
	return "Xin chao" + $hoten;
});
>>>>>>> 7fdb2a07535f469933b243fb40a8967da48f798f
