<div class="card border-success">
    <div class="h5 card-header text-success">
        {{$video->ten_video}}
    </div>
    <div class="card-body">
        <div class="embed-responsive embed-responsive-16by9">
            <video id="current" class="embed-responsive-item" src="http://{{$_SERVER['SERVER_NAME']}}:3000/video/{{$video->id_video}}"></video>
        </div>
        <br><button type="button" name="button" onclick="playPause()">Play/Pause</button>
        <button type="button" name="button" onclick="fullScreen()">Full Screen</button>
        <p>Tên video: {{$video->ten_video}}</p>
        <p>Thời lượng quay: {{$video->thoi_gian}}</p>
        <p>Kich thuoc: {{$video->kich_thuoc}}</p>
        <button type="button">Sửa thông tin video</button>
        <button type="button">Xóa video</button>
    </div>
</div>
