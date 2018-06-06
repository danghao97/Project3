<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanhDaoController extends Controller
{
    public function __construct()
    {
        $this->middleware('LanhDaoMiddle');
        \View::share('NodeJS_Port', env('NODEJS_PORT', '3000'));
    }

    public function GiamSat()
    {
        $doituongs = \App\DoiTuong::all();
        $num = count($doituongs);
        if ($num == 0) {
            $params = ['error' => 'Hiện chưa có đối tượng nào'];
            return view('Pages.LanhDao.GiamSat', $params);
        }
        return redirect()->route("GiamSat.DoiTuong", ['id_doi_tuong' => $doituongs[0]->id_doi_tuong]);
    }

    public function DoiTuong(Request $req, $id_doi_tuong)
    {
        $tab_active = 'tab_GiamSat';
        if ($req->has('page_nd')) {
            $tab_active = 'qlnd';
        } elseif ($req->has('page_vd')) {
            $tab_active = 'qlvd';
        }

        $doi_tuong = \App\DoiTuong::find($id_doi_tuong);
        $params = ['tab_active' => $tab_active];
        if ($doi_tuong != null) {
            $doi_tuongs = \App\DoiTuong::all();
            $params['doi_tuong'] = $doi_tuong;
            $params['doi_tuongs'] = $doi_tuongs;
            $videos = $doi_tuong->Videos;
            if ($videos != null && count($videos) > 0) {
                $params['videos'] = $videos;
            }
        } else {
            $params['error'] = 'Đối tượng không tồn tại';
        }
        return view('Pages.LanhDao.GiamSat', $params);
    }

    public function Video($id_video = null)
    {
        if ($id_video == null) {
            $videos = \App\Video::all();
            $num = count($videos);
            if ($num == 0) {
                $params = ['error' => 'Hiện chưa có video nào'];
                return view('Pages.LanhDao.Video', $params);
            }
            return redirect()->route("GiamSat.Video", ['id_video' => $videos[0]->id_video]);
        }
        $video = \App\Video::find($id_video);
        $videos = \App\Video::all();
        $params = ['error' => 'Video không tồn tại'];
        if ($video != null) {
            $params = [
                'prefix' => 'GiamSat/Video',
                'id_video' => $id_video,
                'video' => $video,
                'videos' => $videos
            ];
        }
        return view('Pages.LanhDao.Video', $params);
    }
}
