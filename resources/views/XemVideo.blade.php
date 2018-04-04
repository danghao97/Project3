<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CAMERA</title>
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
</head>

<body>
    <h2 align=center>Video giám sát</h2>
    <table border="1">
        <tr>
            <td>
                <video id="current" width="800" height="480">
                    <source src="http://{{$_SERVER['SERVER_NAME']}}:8080/video" type="video/mp4">
                </video>
            </td>
            <td rowspan="2">
                <div class="list">
                    <table width="400px">
                        <tr>
                            <td>Video khác</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="http://{{$_SERVER['SERVER_NAME']}}:8080/image" width="200" height="120">
                            </td>
                            <td><a href="/XemVideo">20180316_215037</a><br>00:03</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="http://{{$_SERVER['SERVER_NAME']}}:8080/image" width="200" height="120">
                            </td>
                            <td><a href="/XemVideo">20180316_215037</a><br>00:03</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="http://{{$_SERVER['SERVER_NAME']}}:8080/image" width="200" height="120">
                            </td>
                            <td><a href="/XemVideo">20180316_215037</a><br>00:03</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="http://{{$_SERVER['SERVER_NAME']}}:8080/image" width="200" height="120">
                            </td>
                            <td><a href="/XemVideo">20180316_215037</a><br>00:03</td>
                        </tr>
                        <tr>
                            <td>
                                <img src="http://{{$_SERVER['SERVER_NAME']}}:8080/image" width="200" height="120">
                            </td>
                            <td><a href="/XemVideo">20180316_215037</a><br>00:03</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <button type="button" name="button" onclick="playPause()">Play/Pause</button>
            </td>
        </tr>
    </table>
    <p>Thời điểm quay: 16/03/2018 21:50:50 - Thời lượng quay: 00h03p</p>
    <p>Đối tượng xuất hiện: Không phát hiện đối tượng - Thời điểm xuất hiện: Không tìm thấy</p>
    <p>Thông tin đối tượng: Không tìm thấy</p>
    <button type="button">Sửa thông tin video</button>
    <button type="button">Xóa video</button>
    <script type="text/javascript">
        var myVideo = document.getElementById("current");

        function playPause() {
            if (myVideo.paused) {
                myVideo.play();
            } else{
                myVideo.pause();
            }
        }
    </script>
</body>

</html>
