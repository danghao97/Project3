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

        function fullScreen() {
            var myVideo = $('#current');
            console.log(myVideo[0]);
            myVideo[0].webkitRequestFullScreen();
        }
    </script>
    <style media="screen">
        .list {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <div class="row">
                @if (isset($error))
                    <div class="h1">
                        {{$error}}
                    </div>
                @else
                    <div class="col-md-8">
                        @include('layouts.XemVideo.CurrentVideo')
                    </div>
                    <div class="col-md-4">
                        @include('layouts.XemVideo.ListVideo')
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
