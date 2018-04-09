<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">{{$video->ten_video}}</h3>
    </div>
    <div class="panel-body">
        <div class="embed-responsive embed-responsive-16by9">
            <video id="current" class="embed-responsive-item" src="http://{{$_SERVER['SERVER_NAME']}}:3000/video/{{$video->id_video}}"></video>
        </div>
        <br><button type="button" name="button" onclick="playPause()">Play/Pause</button>
        <button type="button" name="button" onclick="fullScreen()">Full Screen</button>
        <p>Ten video: {{$video->ten_video}}</p>
        <p>Thời lượng quay: {{$video->thoi_gian}}</p>
        <p>Kich thuoc: {{$video->kich_thuoc}}</p>
        <button type="button">Sửa thông tin video</button>
        <button type="button">Xóa video</button>
    </div>
</div>
