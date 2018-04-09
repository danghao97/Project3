<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class ConfigController extends Controller
{
    public function __construct() {
        $this->middleware('ConfigMiddle');
    }

    public function Config() {
        return view('pages.config');
    }

    public function Save(Request $req) {
        $user = new \App\User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->save();
        \Artisan::call('db:seed');
        $errors = new MessageBag(['title' => 'Đã tạo tài khoản quản trị hãy đăng nhập bằng tài khoản vừa tạo']);
        return redirect()->route('login')->withErrors($errors);
    }
}
