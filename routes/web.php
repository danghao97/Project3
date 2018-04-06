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

Route::get('XemVideo/{id_video}', function ($id_video) {
    $video = App\Video::find($id_video);
    $videos = App\Video::all();
    return $video == null ? 'Video khong ton tai' : view('XemVideo', ['id_video' => $id_video, 'video' => $video, 'videos' => $videos]);
});

Route::get('QLTK', function () {
    return view('QLTK');
});

Route::get('getCookie', 'DangHaoController@getCookie');

Route::get('setCookie', 'DangHaoController@setCookie');

Route::get('Blade', function () {
    return view('pages.laravel');
});
