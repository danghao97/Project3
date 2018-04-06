<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CAMERA</title>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <style media="screen">
        body {
            max-width: 1300px;
            margin: auto;
        }

        .list {
            max-height: 500px;
            overflow-y: auto;
        }
    </style>
    <script type="text/javascript">
        function playPause() {
            var myVideo = $('#current');
            if (myVideo[0].paused) {
                myVideo[0].play();
            } else{
                myVideo[0].pause();
            }
        }
        $(document).ready(() => {

        });
    </script>
</head>

<body>
    <h2 align=center>Video giám sát</h2>
    <table border="1">
        <tr>
            <td>
                <video id="current" width="800" height="480">
                    <source src="http://{{$_SERVER['SERVER_NAME']}}:3000/video/{{$video->id_video}}" type="video/mp4">
                </video>
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
        <tr>
            <td>                <button type="button" name="button" onclick="playPause()">Play/Pause</button>
            </td>
        </tr>
    </table>
    <p>Thời điểm quay: 16/03/2018 21:50:50 - Thời lượng quay: {{$video->thoi_gian}}</p>
    <p>Đối tượng xuất hiện: Không phát hiện đối tượng - Thời điểm xuất hiện: Không tìm thấy</p>
    <p>Thông tin đối tượng: Không tìm thấy</p>
    <button type="button">Sửa thông tin video</button>
    <button type="button">Xóa video</button>
</body>

</html>
