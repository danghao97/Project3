<div class="card border-success">
    <div class="h5 card-header text-success">
        Thông tin đối tượng
    </div>
    <div class="card-body">
        <div class="embed-responsive embed-responsive-16by9">
            <video id="current" class="embed-responsive-item" src="http://{{$_SERVER['SERVER_NAME']}}:3000/video/{{$video->id_video}}"></video>
        </div>
        <br><button type="button" name="button" onclick="playPause()">Play/Pause</button>
        <p>Ten video: {{$video->ten_video}}</p>
        <p>Thời lượng quay: {{$video->thoi_gian}}</p>
    </div>
</div>
<div>
    <div class="card border-success">
        <div class="h5 card-header text-success">
            Videos
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div id = "myCarousel" class = "carousel slide" data-ride="carousel">
                        <div class = "carousel-inner">
                            @php ($first = true)
                            @foreach($videos as $value)
                                <div class = "carousel-item{!!($first ? ' active' : '')!!}">
                                    <div class = "thumbnail">
                                        <img class="img-fluid" src="http://{{$_SERVER['SERVER_NAME']}}:3000/image" alt="Generic placeholder thumbnail">
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4>{{$value->ten_video}}</h4>
                                        <p>{{$value->thoi_gian}}</p>
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
                </div>
            </div>
        </div>
    </div>
</div>
