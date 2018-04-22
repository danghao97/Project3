<div class="card border-success">
    <div class="h5 card-header text-success">
        Thông tin đối tượng
    </div>
    <div class="card-body">
        @if (isset($videos))
            <div class="embed-responsive embed-responsive-16by9">
                <video id="current" class="embed-responsive-item" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/video/{{$videos[0]->id_video}}"></video>
            </div>
            <br><button type="button" name="button" onclick="playPause()">Play/Pause</button>
            <button type="button" name="button" onclick="fullScreen()">Full Screen</button>

            <p>Tên video: {{$videos[0]->ten_video}}</p>
            <p>Thời lượng quay: {{$videos[0]->thoi_gian}}</p>
            <p>Kich thuoc: {{$videos[0]->kich_thuoc}}</p>
        @else
            <div class="h3">
                Đối tượng không có video nào
            </div>
        @endif
    </div>
</div>
