<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://{{$_SERVER['SERVER_NAME']}}">@yield('HeaderBrand')</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li id="QuanLy"><a href="http://{{$_SERVER['SERVER_NAME']}}/QuanLy">Quản lý</a></li>
                <li id="VanHanh"><a href="http://{{$_SERVER['SERVER_NAME']}}/VanHanh">Vận hành</a></li>
                <li id="GiamSat"><a href="http://{{$_SERVER['SERVER_NAME']}}/GiamSat">Giám sát</a></li>
                @yield('HeaderNavBar')
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="http://{{$_SERVER['SERVER_NAME']}}/DelData">Xóa hết dữ liệu</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="http://{{$_SERVER['SERVER_NAME']}}/Logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
