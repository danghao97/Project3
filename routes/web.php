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

Route::get('/', 'MyController@Home')->name('/');

Route::get('/home', 'MyController@Home');

Route::get('/home/{id_video}', 'MyController@Home')->name('home');

Route::get('XemVideo', 'MyController@XemVideo');

Route::get('XemVideo/{id_video}', 'MyController@XemVideo')->name('XemVideo');

Route::get('QLTK', 'MyController@QLTK');

Route::get('QLDT', 'MyController@QLDT')->name('QLDT');

Route::post('QLDT', 'MyController@ThemDoiTuong');

Route::get('logout', 'MyController@Logout');

Route::get('config', 'ConfigController@Config')->name('config');

Route::post('config', 'ConfigController@Save');

Route::get('login', 'LoginController@Login')->name('login');

Route::post('login', 'LoginController@DoLogin');

Route::get('DelData', function() {
    \Artisan::call('migrate:refresh');
    return redirect()->route('/');
});
