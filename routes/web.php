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

Route::get('/', 'AppController@GiamSat')->name('/');

Route::prefix('VanHanh')->group(function () {
    Route::get('/', 'VanHanhController@VanHanh')->name('VanHanh');

    Route::get('Video', 'VanHanhController@Video');

    Route::get('Video/{id_video}', 'VanHanhController@Video')->name('VanHanh.Video');

    Route::post('AddCapDo', 'VanHanhController@AddCapDo');

    Route::get('DelCapDo/{id_cap_do}', 'VanHanhController@DelCapDo');

    Route::post('AddLoaiDoiTuong', 'VanHanhController@AddLoaiDoiTuong');

    Route::get('DelLoaiDoiTuong/{id_loai_doi_tuong}', 'VanHanhController@DelLoaiDoiTuong');

    Route::post('ThemDoiTuong', 'VanHanhController@ThemDoiTuong');

    Route::get('XoaDoiTuong/{id_doi_tuong}', 'VanHanhController@XoaDoiTuong');

    Route::post('ThemVideo', 'VanHanhController@ThemVideo');

    Route::get('XoaVideo/{id_video}', 'VanHanhController@XoaVideo');
});

Route::prefix('GiamSat')->group(function () {
    Route::get('Video', 'LanhDaoController@Video');

    Route::get('Video/{id_video}', 'LanhDaoController@Video')->name('GiamSat.Video');

    Route::get('/', 'LanhDaoController@GiamSat')->name('GiamSat');

    Route::get('/{id_doi_tuong}', 'LanhDaoController@DoiTuong')->name('GiamSat.DoiTuong');
});

Route::prefix('QuanLy')->group(function () {
    Route::get('/', 'QuanLyController@QuanLy')->name('QuanLy');

    Route::post('ThemUser', 'QuanLyController@ThemUser');

    Route::get('XoaUser/{id}', 'QuanLyController@XoaUser');
});

Route::prefix('Config')->group(function () {
    Route::get('/', 'ConfigController@Config')->name('Config');

    Route::post('/', 'ConfigController@Save');
});

Route::prefix('Login')->group(function () {
    Route::get('/', 'LoginController@Login')->name('Login');

    Route::post('/', 'LoginController@DoLogin');
});

Route::prefix('/')->group(function () {
    Route::get('phpinfo', function () {
        phpinfo();
    });

    Route::get('Logout', function () {
        Auth::logout();
        return redirect()->route('Login');
    });

    Route::get('DelData', function () {
        \Artisan::call('migrate:refresh');
        return redirect()->route('Config');
    });

    Route::get('{any}', function ($any) {
        return redirect()->route('/');
    });
});
