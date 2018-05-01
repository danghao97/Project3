@extends('Layouts.CustomLayout.Layout')

@section('CustomTitle')
    Giám sát
@endsection

@section('Content')
    <header>
        @include('Layouts.LanhDao.Header')
    </header>
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                @if (isset($error))
                    <h3>{{$error}}</h3>
                @else
                    <div class="col-md-8">
                        @include('Layouts.LanhDao.GiamSat.CurrentVideo')
                    </div>
                    <div class="col-md-4">
                        @include('Layouts.LanhDao.GiamSat.FormSearch')
                    </div>
                @endif
            </div>
        </div>
    </div>
    <footer>
        @include('Layouts.CustomLayout.Footer')
    </footer>
@endsection

@section('CustomJS')
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
    @yield('GiamSatJS')
@endsection
