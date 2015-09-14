<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('share.__layout');
});
Route::get('/admin', function () {
    return view('admin.__layout');
});
Route::post("/logo","admin\layout@change_logo_l");
Route::post("/logol","admin\layout@change_logo");
