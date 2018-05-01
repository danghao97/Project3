<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuanLyController extends Controller
{
    public function __construct()
    {
        $this->middleware('QuanlyMiddle');
    }

    public function QuanLy()
    {
        $users = \App\User::paginate(5);
        $chuc_vus = ['Quản lý hệ thống', 'Vận hành hệ thống', 'Lãnh đạo'];
        return view('Pages.QuanLy.QuanLy', [
            'users' => $users,
            'chuc_vus' => $chuc_vus,
        ]);
    }

    public function ThemUser(Request $req)
    {
        $user = new \App\User();
        $user->name = $req->nd_name;
        $user->gioi_tinh = $req->nd_gioitinh;
        $user->email = $req->nd_email;
        $user->so_dien_thoai = $req->nd_sdt;
        $user->que_quan = $req->nd_quequan;
        $user->nam_sinh = $req->nd_namsinh;
        $user->don_vi = $req->nd_donvi;
        $user->chuc_vu = $req->nd_chucvu;
        $user->password = bcrypt($req->nd_password);
        $user->save();
        return redirect()->route('QuanLy');
    }

    public function XoaUser($id)
    {
        $user = \App\User::find($id);
        if ($user != null) {
            $user->delete();
        }
        return redirect()->route('QuanLy');
    }
}
