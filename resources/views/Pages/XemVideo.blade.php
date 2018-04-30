@extends('Layouts.CustomLayout.Layout')
@section('CustomTitle')
    XemVideo
@endsection

@section('NavBar')xemvideo @endsection

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
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                @if (isset($error))
                    <div class="h3">
                        {{$error}}
                    </div>
                @else
                    <div class="col-md-8">
                        @include('Layouts.XemVideo.CurrentVideo')
                    </div>
                    <div class="col-md-4">
                        @include('Layouts.XemVideo.ListVideo')
                    </div>
                @endif
            </div>
        </div>
    </div>
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
