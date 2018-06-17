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
                    <div class="col-md-8">
                        @include('Layouts.Video.CurrentVideo')
                    </div>
                    <div class="col-md-4">
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
