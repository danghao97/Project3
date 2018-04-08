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
                    <video preload="metadata" id="current" class="embed-responsive-item" src="http://{{$_SERVER['SERVER_NAME']}}:3000/video/{{$video->id_video}}"></video>
                </div>
                <br><button type="button" name="button" onclick="playPause()">Play/Pause</button>

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
            <div class="panel-body">
                <div class="list">
                    <table>
                        @foreach($videos as $value)
                            <tr>
                                <td>
                                    <img class="img-responsive" src="http://{{$_SERVER['SERVER_NAME']}}:3000/image" width="200" height="120">
                                </td>
                                <td><a href="/XemVideo/{{$value->id_video}}">{{$value->ten_video}}</a><br>{{$value->thoi_gian}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
