@extends('Layouts.CustomLayout.Layout')

@section('CustomTitle')
    Video
@endsection

@section('NavBar')Video @endsection

@section('CustomCSS')
    <style media="screen">
        .list {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>
@endsection

@section('Content')
    <header>
        @include('Layouts.VanHanh.Header')
    </header>
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                @if (isset($error))
                    <div class="h3">
                        {{$error}}
                    </div>
                @else
                    <div class="col-md-9">
                        @include('Layouts.Video.CurrentVideo')
                    </div>
                    <div class="col-md-3">
                        @include('Layouts.Video.ListVideo')
                    </div>
                @endif
            </div>
        </div>
    </div>
    <footer>
        @include('Layouts.VanHanh.Footer')
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
@endsection
