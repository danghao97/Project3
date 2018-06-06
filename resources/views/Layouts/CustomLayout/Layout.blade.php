@extends('Layouts.MainLayout')

@section('MainTitle')
    CAMERA - @yield('CustomTitle')
@endsection

@section('MainCSS')
    <style media="screen">
        body {
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>
    @yield('CustomCSS')
@endsection

@section('MainBody')
    <header>
        @include('Layouts.CustomLayout.Header')
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @yield('Content')
            </div>
        </div>
    </div>
    <footer>
        @include('Layouts.CustomLayout.Footer')
    </footer>
@endsection

@section('MainJS')
    <script type="text/javascript">
        $(document).ready(() => {
            var id = '@yield('NavBar')';
            var navitem = $('#' + id.trim());
            navitem.addClass('active');
        });
    </script>
    @yield('CustomJS')
@endsection
