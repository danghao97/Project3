@section('CustomCSS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
@endsection

<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Thông tin giám sát</h3>
    </div>
    <div class="panel-body">
        {{-- <form method='POST'> --}}
            <div class="form-group">
                <label for="doituong">Tên đối tượng</label>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Lựa chọn đối tượng
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li>
                            <input class="form-control input-sm" id="doituong" type="text" placeholder="Tìm kiếm">
                        </li>
                        @foreach($doi_tuongs as $value)
                            <li><a href="/GiamSat/{{$value->id_doi_tuong}}">{{$value->ten_doi_tuong}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="form-group">
                <label for="daystart">Từ ngày</label>
                <div class="row">
                    <div class="col-md-6">
                        <input id="daystart" type="date" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="input-group bootstrap-timepicker timepicker">
                            <input id="timefrom" type="text" class="form-control input-small">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="dayend">Đến ngày</label>
                <div class="row">
                    <div class="col-md-6">
                        <input id="dayend" type="date"  class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="input-group bootstrap-timepicker timepicker">
                            <input id="timeto" type="text" class="form-control input-small">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Xem video</button>
            </div>
        {{-- </form> --}}
    </div>
</div>
<div>
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Videos</h3>
        </div>
        <div class="panel-body">
            @if (isset($videos))
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @php ($first = true)
                        @foreach($videos as $video)
                            <div class="item{!!($first ? ' active' : '')!!}">
                                <img class="img-responsive" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/image" alt="Generic placeholder thumbnail">
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>{{$video->ten_video}}</h4>
                                    <p>{{$video->thoi_gian}}</p>
                                </div>
                            </div>
                            @php ($first = false)
                        @endforeach
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            @else
                <div class="h3">
                    Đối tượng không có video nào
                </div>
            @endif
        </div>
    </div>
</div>

@section('GiamSatJS')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
    <script type="text/javascript">
        $('#timefrom').timepicker();
        $('#timeto').timepicker();
    </script>
@endsection
