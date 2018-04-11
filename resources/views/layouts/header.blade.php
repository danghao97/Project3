<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="http://{{$_SERVER['SERVER_NAME']}}">CAMERA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item" id="home"><a class="nav-link" href="http://{{$_SERVER['SERVER_NAME']}}/home">Home</a></li>
                <li class="nav-item" id="xemvideo"><a class="nav-link" href="http://{{$_SERVER['SERVER_NAME']}}/XemVideo">XemVideo</a></li>
                <li class="nav-item" id="qltk"><a class="nav-link" href="http://{{$_SERVER['SERVER_NAME']}}/QLTK">QLTK</a></li>
                <li class="nav-item" id="qldt"><a class="nav-link" href="http://{{$_SERVER['SERVER_NAME']}}/QLDT">QLDT</a></li>
            </ul>
            <div class="navbar-nav dropdown ml-auto">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cài đặt
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="http://{{$_SERVER['SERVER_NAME']}}/DelData">Xóa hết dữ liệu</a>
                    <a class="dropdown-item" href="http://{{$_SERVER['SERVER_NAME']}}/logout">Logout</a>
                </div>
            </div>
        </div><!--/.nav-collapse -->
    </div>
</nav>
