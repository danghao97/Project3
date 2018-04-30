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

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/', 'AppController@Home')->name('/');

Route::get('/home', 'AppController@Home');

Route::get('/home/{id_doi_tuong}', 'AppController@Home')->name('home');

Route::get('XemVideo', 'AppController@XemVideo');

Route::get('XemVideo/{id_video}', 'AppController@XemVideo')->name('XemVideo');

Route::get('QLTK', 'AppController@QLTK');

Route::get('QLHT', 'AppController@QLHT')->name('QLHT');

Route::post('QLHT/ThemDT', 'AppController@ThemDoiTuong');

Route::get('QLHT/XoaDT/{id_doi_tuong}', 'AppController@XoaDoiTuong');

Route::post('QLHT/ThemND', 'AppController@ThemNguoiDung');

Route::get('QLHT/XoaND/{id}', 'AppController@XoaNguoiDung');

Route::post('QLHT/ThemVD', 'AppController@ThemVideo');

Route::get('QLHT/XoaVD/{id_video}', 'AppController@XoaVideo');

Route::get('logout', 'AppController@Logout');

Route::get('config', 'ConfigController@Config')->name('config');

Route::post('config', 'ConfigController@Save');

Route::get('login', 'LoginController@Login')->name('login');

Route::post('login', 'LoginController@DoLogin');

Route::get('DelData', function () {
    \Artisan::call('migrate:refresh');
    return redirect()->route('/');
});
