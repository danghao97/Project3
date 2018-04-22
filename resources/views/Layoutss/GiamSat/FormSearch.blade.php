<div class="card border-success">
    <div class="h5 card-header text-success">
        Thông tin giám sát
    </div>
    <div class="card-body">
        <form method='POST'>
            <div class="form-group">
                <label for="doituong">Tên đối tượng</label>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        Lựa chọn đối tượng
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                        <input class="form-control" id="doituong" type="text" placeholder="Tìm kiếm">
                        @foreach($doi_tuongs as $value)
							<a class="dropdown-item" href="/home/{{$value->id_doi_tuong}}">{{$value->ten_doi_tuong}}</a>
						@endforeach
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="ngay">Từ ngày</label>
                <div class="row">
                    <div class="col-md-6">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="input-group bootstrap-timepicker timepicker">
                            <input id="timefrom" type="text" class="form-control input-small">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                        <script type="text/javascript">
                            $('#timefrom').timepicker();
                        </script>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="ngay">Đến ngày</label>
                <div class="row">
                    <div class="col-md-6">
                        <input type="date"  class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="input-group bootstrap-timepicker timepicker">
                            <input id="timeto" type="text" class="form-control input-small">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $('#timeto').timepicker();
                    </script>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Xem video</button>
            </div>
        </form>
    </div>
</div>
<div>
    <div class="card border-success">
        <div class="h5 card-header text-success">
            Videos
        </div>
        <div class="card-body">
            @if (isset($videos))
                <div id = "myCarousel" class = "carousel slide" data-ride="carousel">
                    <div class = "carousel-inner">
                        @php ($first = true)
                        @foreach($videos as $video)
                            <div class = "carousel-item{!!($first ? ' active' : '')!!}">
                                <div class = "thumbnail">
                                    <img class="img-fluid" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/image" alt="Generic placeholder thumbnail">
                                </div>
                                <div class="carousel-caption d-none d-md-block">
                                    <h4>{{$video->ten_video}}</h4>
                                    <p>{{$video->thoi_gian}}</p>
                                </div>
                            </div>
                            @php ($first = false)
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
