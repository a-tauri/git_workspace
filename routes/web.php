<?php

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

Route::get('/a',function() {
    return "Izumo";
});

Route::get('/b','test@index');

Route::get('/c','test@c');

Route::get('index','PostsNewblog@index');

Route::post('resist','PostsNewblog@resist');

Route::post('delete','PostsNewblog@delete');


