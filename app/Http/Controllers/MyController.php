<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class MyController extends Controller
{
    public function __construct()
    {
        $this->middleware('MyMiddle');
    }

    public function Home($id_doi_tuong = null)
    {
        if ($id_doi_tuong == null) {
            $doituongs = \App\DoiTuong::all();
            $num = count($doituongs);
            if ($num == 0) {
                $params = ['error' => 'Hiện chưa có đối tượng nào'];
                return view('pages.home', $params);
            }
            return redirect()->route("home", ['id_doi_tuong' => $doituongs[0]->id_doi_tuong]);
        }
        $doi_tuong = \App\DoiTuong::find($id_doi_tuong);
        $params = [];
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
        return view('pages.home', $params);
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

    public function QLTK()
    {
        return view('pages.QLTK');
    }

    public function QLHT(Request $req)
    {
        $loai_doi_tuongs = \App\LoaiDoiTuong::all();
        $doi_tuongs = \App\DoiTuong::paginate(2, ['*'], 'page_dt');
        $users = \App\User::paginate(2, ['*'], 'page_nd');
        $videos = \App\Video::paginate('2', ['*'], 'page_vd');

        $tab_active = 'qldt';
        if ($req->has('page_dt')) {
            $tab_active = 'qldt';
        } elseif ($req->has('page_nd')) {
            $tab_active = 'qlnd';
        } elseif ($req->has('page_vd')) {
            $tab_active = 'qlvd';
        }
        return view('pages.QLHT', [
            'tab_active' => $tab_active,
            'loai_doi_tuongs' => $loai_doi_tuongs,
            'doi_tuongs' => $doi_tuongs,
            'users' => $users,
            'videos' => $videos
        ]);
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

        return redirect()->route('QLHT');
    }

    public function XoaDoiTuong($id_doi_tuong)
    {
        $doi_tuong = \App\DoiTuong::find($id_doi_tuong);
        if ($doi_tuong != null) {
            $doi_tuong->delete();
        }
        return redirect()->route('QLHT');
    }

    public function ThemNguoiDung(Request $req)
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
        return redirect()->route('QLHT');
    }

    public function XoaNguoiDung($id)
    {
        $user = \App\User::find($id);
        if ($user != null) {
            $user->delete();
        }
        return redirect()->route('QLHT');
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
        return redirect()->route('QLHT');
    }

    public function XoaVideo($id_video)
    {
        $video = \App\Video::find($id_video);
        if ($video != null) {
            $video->delete();
        }
        return redirect()->route('QLHT');
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

    public function Logout()
    {
        $login = redirect()->route('login');
        if (!Auth::check()) {
            $errors = new MessageBag(['title' => 'Bạn chưa đăng nhập vào hệ thống']);
            return $login->withErrors($errors);
        }
        Auth::logout();
        return $login;
    }
}
