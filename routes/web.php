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

Route::get('/', 'MyController@Index')->name('/');

Route::get('/home', 'MyController@Home');

Route::get('XemVideo', 'MyController@XemVideo');

Route::get('XemVideo/{id_video}', 'MyController@XemVideo')->name('XemVideo');

Route::get('QLTK', 'MyController@QLTK');

Route::get('QLDT', 'MyController@QLDT');

Route::post('QLDT', 'MyController@ThemDoiTuong');

Route::get('config', 'ConfigController@Config')->name('config');

Route::post('config', 'ConfigController@Save');

Route::get('login', 'LoginController@Login')->name('login');

Route::post('login', 'LoginController@DoLogin');

Route::get('logout', 'MyController@Logout');
