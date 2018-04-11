<div class="card border-success">
    <div class="h5 card-header text-success">
        Video khác
    </div>
    <div class="card-body row">
        <div class="list">
            @foreach($videos as $value)
                <div class="row">
                    <div class="col-md-9">
                        <img class="img-fluid" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/image">
                    </div>
                    <div class="col-md-3">
                        <a href="/XemVideo/{{$value->id_video}}">{{$value->ten_video}}</a>
                        <br>
                        {{$value->thoi_gian}}
                    </div>
                    <div class="w-100"></div>
                </div>
            @endforeach
        </div>
    </div>
</div>
