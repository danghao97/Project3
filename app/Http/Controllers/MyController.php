<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function Index() {
        // redirect login if logout
        return view('index');
    }

    public function XemVideo($id_video = null)
    {
        if ($id_video == null) {
            $videos = \App\Video::all();
            $num = count($videos);
            if ($num == 0) {
                echo 'Hien chua co video nao';
                return;
            }
            return redirect()->route("XemVideo", ['id_video' => $videos[0]->id_video]);
        }
        $video = \App\Video::find($id_video);
        $videos = \App\Video::all();
        return $video == null ? 'Video khong ton tai' : view('pages.XemVideo', [
            'id_video' => $id_video,
            'video' => $video,
            'videos' => $videos
        ]);
    }

    public function QLDT() {
        $loai_doi_tuongs = \App\LoaiDoiTuong::all();
        $doi_tuongs = \App\DoiTuong::paginate(1);
        return view('pages.QLDT', [
            'loai_doi_tuongs' => $loai_doi_tuongs,
            'doi_tuongs' => $doi_tuongs
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
}
