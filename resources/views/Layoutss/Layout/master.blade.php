<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--[if lt IE 9]>
            <script src="../../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <title>CAMERA - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        <script type="text/javascript">
            $(document).ready(() => {
                var id = '@yield('navitem')';
                var navitem = $('#' + id.trim());
                navitem.addClass('active');
            });
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
        <style media="screen">
            body {
                padding-top: 70px;
                padding-bottom: 70px;
            }
            label {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <header>
            @include('layouts.header')
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.body')
                </div>
            </div>
        </div>
        <footer>
            @include('layouts.footer')
        </footer>
    </body>
</html>
