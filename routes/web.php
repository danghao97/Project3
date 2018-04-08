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

Route::get('/', 'MyController@Index');

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('XemVideo', 'MyController@XemVideo');

Route::get('XemVideo/{id_video}', 'MyController@XemVideo')->name('XemVideo');

Route::get('QLTK', function () {
    return view('pages.QLTK');
});

Route::get('QLDT', 'MyController@QLDT')->name('QLDT');

Route::post('QLDT', 'MyController@ThemDoiTuong');
