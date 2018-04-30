@extends('Layouts.CustomLayout.Layout')
@section('CustomTitle')
    HomePage
@endsection

@section('NavBar')home @endsection

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
                        @include('Layouts.GiamSat.CurrentVideo')
                    </div>
                    <div class="col-md-4">
                        @include('Layouts.GiamSat.FormSearch')
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
