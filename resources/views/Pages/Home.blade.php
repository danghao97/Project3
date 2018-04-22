@extends('layouts.master')
@section('title')
    HomePage
@endsection
@section('navitem')home @endsection
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
    <div class="card">
        <div class="card-body">
            <div class="row">
                @if (isset($error))
                    <div class="h1">
                        {{$error}}
                    </div>
                @else
                    <div class="col-md-8">
                        @include('layouts.GiamSat.CurrentVideo')
                    </div>
                    <div class="col-md-4">
                        @include('layouts.GiamSat.FormSearch')
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
