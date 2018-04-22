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

View::share('NodeJS_Port', env('NODEJS_PORT', '3000'));

Route::get('/phpinfo', function() {
    phpinfo();
});

Route::get('/', 'MyController@Home')->name('/');

Route::get('/home', 'MyController@Home');

Route::get('/home/{id_doi_tuong}', 'MyController@Home')->name('home');

Route::get('XemVideo', 'MyController@XemVideo');

Route::get('XemVideo/{id_video}', 'MyController@XemVideo')->name('XemVideo');

Route::get('QLTK', 'MyController@QLTK');

Route::get('QLHT', 'MyController@QLHT')->name('QLHT');

Route::post('QLHT/ThemDT', 'MyController@ThemDoiTuong');

Route::get('QLHT/XoaDT/{id_doi_tuong}', 'MyController@XoaDoiTuong');

Route::post('QLHT/ThemND', 'MyController@ThemNguoiDung');

Route::get('QLHT/XoaND/{id}', 'MyController@XoaNguoiDung');

Route::post('QLHT/ThemVD', 'MyController@ThemVideo');

Route::get('QLHT/XoaVD/{id_video}', 'MyController@XoaVideo');

Route::get('logout', 'MyController@Logout');

Route::get('config', 'ConfigController@Config')->name('config');

Route::post('config', 'ConfigController@Save');

Route::get('login', 'LoginController@Login')->name('login');

Route::post('login', 'LoginController@DoLogin');

Route::get('DelData', function() {
    \Artisan::call('migrate:refresh');
    return redirect()->route('/');
});
