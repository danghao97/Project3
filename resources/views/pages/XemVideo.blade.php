@extends('layouts.master')
@section('title')
    XemVideo
@endsection
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
    <table border="1">
        <tr>
            <td>
                <video id="current" width="800" height="480">
                    <source src="http://{{$_SERVER['SERVER_NAME']}}:3000/video/{{$video->id_video}}" type="video/mp4">
                </video><br>
                <button type="button" name="button" onclick="playPause()">Play/Pause</button>
            </td>
            <td rowspan="2" style="vertical-align: top;">
                <div class="list">
                    <table width="400px">
                        <tr>
                            <td>Video khác</td>
                            <td></td>
                        </tr>
                        @foreach($videos as $value)
                            <tr>
                                <td width=200>
                                    <img src="http://{{$_SERVER['SERVER_NAME']}}:3000/image" width="200" height="120">
                                </td>
                                <td><a href="/XemVideo/{{$value->id_video}}">{{$value->ten_video}}</a><br>{{$value->thoi_gian}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <p>Ten video: {{$video->ten_video}}</p>
    <p>Thời lượng quay: {{$video->thoi_gian}}</p>
    <p>Kich thuoc: {{$video->kich_thuoc}}</p>
    <button type="button">Sửa thông tin video</button>
    <button type="button">Xóa video</button>
@endsection
