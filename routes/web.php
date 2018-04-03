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
    return view('index');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('XemVideo', function () {
    return view('XemVideo');
});

Route::get('QLTK', function () {
    return view('QLTK');
});

Route::get('/hello', function () {
    return "Hello";
});

Route::get('getCookie', 'DangHaoController@getCookie');

Route::get('setCookie', 'DangHaoController@setCookie');

Route::get('Blade', function () {
    return view('pages.laravel');
});

Route::get('mysql', function () {
    Schema::create('newdb', function ($table) {
        $table->increments('id');
        $table->string('name');
    });
});
