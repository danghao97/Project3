@extends('layouts.master')
@section('title')
    XemVideo
@endsection
@section('navitem')xemvideo @endsection
@section('content')
    <script type="text/javascript">
        function playPause() {
            var myVideo = $('#current');
            if (myVideo[0].paused) {
                myVideo[0].play();
            } else{
                myVideo[0].pause();
            }
        }

        function fullScreen() {
            var myVideo = $('#current');
            console.log(myVideo[0]);
            myVideo[0].webkitRequestFullScreen();
        }
    </script>
    <style media="screen">
        .list {
            max-height: 500px;
            overflow-y: auto;
        }
    </style>
    <div class="col-md-8">
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
    </div>
    <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Video khac</h3>
            </div>
            <div class="panel-body row">
                <div class="list">
                    @foreach($videos as $value)
                        <div class="col-md-9">
                            <img class="img-responsive" src="http://{{$_SERVER['SERVER_NAME']}}:3000/image">
                        </div>
                        <div class="col-md-3">
                            <a href="/XemVideo/{{$value->id_video}}">{{$value->ten_video}}</a>
                            <br>
                            {{$value->thoi_gian}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
