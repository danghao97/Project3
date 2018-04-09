<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class MyController extends Controller
{
    public function __construct() {
        $this->middleware('MyMiddle');
    }

    public function Home() {
        return view('pages.home');
    }

    public function XemVideo($id_video = null)
    {
        if ($id_video == null) {
            $videos = \App\Video::all();
            $num = count($videos);
            if ($num == 0) {
                $params = ['error' => 'Hiện chưa có video nào'];
                return view('pages.XemVideo', $params);
            }
            return redirect()->route("XemVideo", ['id_video' => $videos[0]->id_video]);
        }
        $video = \App\Video::find($id_video);
        $videos = \App\Video::all();
        $params = ['error' => 'Video không tồn tại'];
        if ($video != null) {
            $params = [
                'id_video' => $id_video,
                'video' => $video,
                'videos' => $videos
            ];
        }
        return view('pages.XemVideo', $params);
    }

    public function QLTK() {
        return view('pages.QLTK');
    }

    public function QLDT(Request $req) {
        $loai_doi_tuongs = \App\LoaiDoiTuong::all();
        $doi_tuongs = \App\DoiTuong::paginate(2, ['*'], 'page_dt');
        $users = \App\User::paginate(2, ['*'], 'page_nd');
        $videos = \App\Video::paginate('2', ['*'], 'page_vd');

        $tab_active = 'quanlydoituong';
        if ($req->has('page_dt')) {
            $tab_active = 'quanlydoituong';
        } else if ($req->has('page_nd')) {
            $tab_active = 'quanlynguoidung';
        } else if ($req->has('page_vd')) {
            $tab_active = 'quanlyvideo';
        }
        return view('pages.QLDT', [
            'tab_active' => $tab_active,
            'loai_doi_tuongs' => $loai_doi_tuongs,
            'doi_tuongs' => $doi_tuongs,
            'users' => $users,
            'videos' => $videos
        ]);
    }

    public function ThemDoiTuong(Request $req) {
        $doi_tuong = new \App\DoiTuong();
        $doi_tuong->ten_doi_tuong = $req->ten;
        $doi_tuong->tuoi = $req->tuoi;
        $doi_tuong->nghe_nghiep = $req->nghenghiep;
        $doi_tuong->chuc_vu = $req->chucvu;
        $doi_tuong->anh_chan_dung = '';
        $doi_tuong->id_loai_doi_tuong = $req->loaidoituong;
        $doi_tuong->save();
        return redirect()->route('QLDT');
    }

    public function Config() {
        return view('layouts.config');
    }

    public function Logout() {
        $login = redirect()->route('login');
        if (!Auth::check()) {
            $errors = new MessageBag(['title' => 'Bạn chưa đăng nhập vào hệ thống']);
            return $login->withErrors($errors);
        }
        Auth::logout();
        return $login;
    }
}
