<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware('ConfigMiddle');
    }

    public function Config()
    {
        return view('Pages.Config');
    }

    public function Save(Request $req)
    {
        $user = new \App\User();
        $user->name = $req->name;
        $user->gioi_tinh = $req->nd_gioitinh;
        $user->email = $req->email;
        $user->so_dien_thoai = $req->nd_sdt;
        $user->que_quan = $req->nd_quequan;
        $user->nam_sinh = $req->nd_namsinh;
        $user->don_vi = $req->nd_donvi;
        $user->chuc_vu = $req->nd_chucvu;
        $user->password = bcrypt($req->password);
        $user->save();
        $user->chuc_vu = '0';
        $user->save();
        \Artisan::call('db:seed');
        $errors = new MessageBag(['title' => 'Đã tạo tài khoản quản trị hãy đăng nhập bằng tài khoản vừa tạo']);
        return redirect()->route('Login')->withErrors($errors);
    }
}
