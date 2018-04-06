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
        return $video == null ? 'Video khong ton tai' : view('XemVideo', [
            'id_video' => $id_video,
            'video' => $video,
            'videos' => $videos
        ]);
    }
}
