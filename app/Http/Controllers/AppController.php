<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('AppMiddle');
        \View::share('NodeJS_Port', env('NODEJS_PORT', '3000'));
    }

    public function Video($id_video = null)
    {
        $User = Auth::user();
        if ($User->chuc_vu != 1 && $User->chuc_vu != 2) {
            // Chỉ VHHT và LD được phép truy cập
            $params = ['error' => 'Bạn không được phép truy cập'];
            return view('pages.Video', $params);
        }
        if ($id_video == null) {
            $videos = \App\Video::all();
            $num = count($videos);
            if ($num == 0) {
                $params = ['error' => 'Hiện chưa có video nào'];
                return view('pages.Video', $params);
            }
            return redirect()->route("Video", ['id_video' => $videos[0]->id_video]);
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
        return view('pages.Video', $params);
    }

    public function DoiTuong()
    {
        $User = Auth::user();
        if ($User->chuc_vu != 1) {
            // Chỉ VHHT được phép truy cập
            $params = ['error' => 'Bạn không được phép truy cập'];
            return view('pages.DoiTuong', $params);
        }
        $loai_doi_tuongs = \App\LoaiDoiTuong::all();
        $doi_tuongs = \App\DoiTuong::paginate(5, ['*'], 'page_dt');
        return view('Pages.DoiTuong', [
            'loai_doi_tuongs' => $loai_doi_tuongs,
            'doi_tuongs' => $doi_tuongs,
        ]);
    }

    public function QuanLy(Request $req)
    {
        $User = Auth::user();
        if ($User->chuc_vu != 0) {
            // Chỉ QLHT được phép truy cập
            $params = ['error' => 'Bạn không được phép truy cập'];
            return view('pages.QuanLy', $params);
        }
        \View::share('chuc_vus', ['Quản lý hệ thống', 'Vận hành hệ thống', 'Lãnh đạo']);
        $users = \App\User::paginate(5, ['*'], 'page_nd');
        $doi_tuongs = \App\DoiTuong::all();
        $videos = \App\Video::paginate(5, ['*'], 'page_vd');

        $tab_active = 'qlnd';
        if ($req->has('page_nd')) {
            $tab_active = 'qlnd';
        } elseif ($req->has('page_vd')) {
            $tab_active = 'qlvd';
        }
        return view('pages.QuanLy', [
            'tab_active' => $tab_active,
            'users' => $users,
            'doi_tuongs' => $doi_tuongs,
            'videos' => $videos,
        ]);
    }

    public function ThemVideo(Request $req)
    {
        $video = new \App\Video();
        $video->id_doi_tuong = $req->vd_dt;
        $video->ten_video = $req->vd_name;
        $video->duong_dan = $req->vd_duongdan;
        $video->kich_thuoc = $req->vd_kichthuoc;
        $video->thoigian_batdau = $req->vd_start;
        $video->thoi_gian = $req->vd_time;
        $video->save();
        return redirect()->route('QuanLy');
    }

    public function XoaVideo($id_video)
    {
        $video = \App\Video::find($id_video);
        if ($video != null) {
            $video->delete();
        }
        return redirect()->route('QuanLy');
    }

    public function PostVideo($type, $filename, $content)
    {
        $NodeJS_Port = env('NODEJS_PORT', '3000');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://{$_SERVER['SERVER_NAME']}:{$NodeJS_Port}/storage/doi_tuong/{$type}");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "filename={$filename}&content={$content}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
    }
}
