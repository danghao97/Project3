<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class VanHanhController extends Controller
{
    public function __construct()
    {
        $this->middleware('VanHanhMiddle');
        \View::share('NodeJS_Port', env('NODEJS_PORT', '3000'));
    }

    public function VanHanh(Request $req)
    {
        $videos = \App\Video::paginate(5, ['*'], 'Page-Video');
        $doi_tuongs = \App\DoiTuong::paginate(5, ['*'], 'Page-DoiTuong');
        $all_doi_tuong = \App\DoiTuong::all();
        $loai_doi_tuongs = \App\LoaiDoiTuong::all();
        $cap_dos = \App\CapDo::all();

        $tab_active = 'DoiTuong';
        if ($req->has('Page-Video')) {
            $tab_active = 'Video';
        } elseif ($req->has('Page-DoiTuong')) {
            $tab_active = 'DoiTuong';
        }
        return view('Pages.VanHanh.VanHanh', [
            'tab_active' => $tab_active,
            'videos' => $videos,
            'all_doi_tuong' => $all_doi_tuong,
            'doi_tuongs' => $doi_tuongs,
            'loai_doi_tuongs' => $loai_doi_tuongs,
            'cap_dos' => $cap_dos,
        ]);
    }

    public function Video($id_video = null)
    {
        if ($id_video == null) {
            $videos = \App\Video::all();
            $num = count($videos);
            if ($num == 0) {
                $params = ['error' => 'Hiện chưa có video nào'];
                return view('Pages.VanHanh.Video', $params);
            }
            return redirect()->route("VanHanh.Video", ['id_video' => $videos[0]->id_video]);
        }
        $video = \App\Video::find($id_video);
        $videos = \App\Video::all();
        $params = ['error' => 'Video không tồn tại'];
        if ($video != null) {
            $params = [
                'prefix' => 'VanHanh/Video',
                'id_video' => $id_video,
                'video' => $video,
                'videos' => $videos
            ];
        }
        return view('Pages.VanHanh.Video', $params);
    }

    public function AddCapDo(Request $req)
    {
        $cap_do = new \App\CapDo();
        $cap_do->ten_cap_do = $req->tencapdo;
        $cap_do->muc_do_anh_huong = $req->mucdo;
        $cap_do->save();
        return redirect()->route('VanHanh');
    }

    public function DelCapDo($id_cap_do)
    {
        $cap_do = \App\CapDo::find($id_cap_do);
        if ($cap_do != null) {
            $cap_do->delete();
        }
        return redirect()->route('VanHanh');
    }

    public function AddLoaiDoiTuong(Request $req)
    {
        $loai_doi_tuong = new \App\LoaiDoiTuong();
        $loai_doi_tuong->ten_loai = $req->tenloai;
        $loai_doi_tuong->id_cap_do = $req->idcapdo;
        $loai_doi_tuong->save();
        return redirect()->route('VanHanh');
    }

    public function DelLoaiDoiTuong($id_loai_doi_tuong)
    {
        $loai_doi_tuong = \App\LoaiDoiTuong::find($id_loai_doi_tuong);
        if ($loai_doi_tuong != null) {
            $loai_doi_tuong->delete();
        }
        return redirect()->route('VanHanh');
    }

    public function ThemDoiTuong(Request $req)
    {
        if (!$req->hasFile('dt_photo') || !$req->hasFile('dt_video')) {
            $errors = new MessageBag(['dt_title' => 'Ảnh và video nhận diện không được để trống']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
        $photo = $req->file('dt_photo');
        $photo_size = $photo->getClientSize('dt_photo');
        $video = $req->file('dt_video');
        $video_size = $video->getClientSize('dt_video');
        $total_size = $video_size + $photo_size;
        if ($total_size > 10485760) {
            $errors = new MessageBag(['dt_title' => 'Dung lượng upload tối đa là 10MB']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
        $doi_tuong = new \App\DoiTuong();
        $doi_tuong->ten_doi_tuong = $req->dt_name;
        $doi_tuong->tuoi = $req->dt_namsinh;
        $doi_tuong->nghe_nghiep = $req->dt_nghenghiep;
        $doi_tuong->chuc_vu = $req->dt_chucvu;
        $doi_tuong->id_loai_doi_tuong = $req->dt_loaidoituong;
        $doi_tuong->photo_extension = $photo->getClientOriginalExtension('dt_photo');
        $doi_tuong->video_extension = $video->getClientOriginalExtension('dt_video');
        $doi_tuong->save();

        $photo = base64_encode(file_get_contents($photo->getRealPath()));
        $video = base64_encode(file_get_contents($video->getRealPath()));
        $photo = urlencode($photo);
        $video = urlencode($video);
        $this->PostVideo('image', "{$doi_tuong->id_doi_tuong}.{$doi_tuong->photo_extension}", $photo);
        $this->PostVideo('video', "{$doi_tuong->id_doi_tuong}.{$doi_tuong->video_extension}", $video);

        return redirect()->route('VanHanh');
    }

    public function XoaDoiTuong($id_doi_tuong)
    {
        $doi_tuong = \App\DoiTuong::find($id_doi_tuong);
        if ($doi_tuong != null) {
            $doi_tuong->delete();
        }
        return redirect()->route('VanHanh');
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
        return redirect()->route('VanHanh');
    }

    public function XoaVideo($id_video)
    {
        $video = \App\Video::find($id_video);
        if ($video != null) {
            $video->delete();
        }
        return redirect()->route('VanHanh');
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
