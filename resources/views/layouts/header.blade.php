<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://{{$_SERVER['SERVER_NAME']}}">CAMERA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li id="home"><a href="http://{{$_SERVER['SERVER_NAME']}}/home">Home</a></li>
                <li id="xemvideo"><a href="http://{{$_SERVER['SERVER_NAME']}}/XemVideo">XemVideo</a></li>
                <li id="qltk"><a href="http://{{$_SERVER['SERVER_NAME']}}/QLTK">QLTK</a></li>
                <li id="qldt"><a href="http://{{$_SERVER['SERVER_NAME']}}/QLDT">QLDT</a></li>
                <li id="logout"><a href="http://{{$_SERVER['SERVER_NAME']}}/logout">Logout</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
