<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <style media="screen">
            body {
                padding-top: 70px;
            }
        </style>
    </head>
    <body>
        <header>
            @include('layouts.header')
        </header>
        <div class="container">
            <div class="row">
                @include('layouts.body')
            </div>
        </div>
        <footer>
            @include('layouts.footer')
        </footer>
    </body>
</html>
