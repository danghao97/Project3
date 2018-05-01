<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Video khác</h3>
    </div>
    <div class="panel-body">
        <div class="list">
            @foreach($videos as $value)
                <div class="col-md-9">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video id="List{{$value->id_video}}" class="embed-responsive-item" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/video/{{$value->id_video}}"></video>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="/{{$prefix}}/{{$value->id_video}}">{{$value->ten_video}}</a>
                    <br>
                    {{$value->thoi_gian}}
                </div>
            @endforeach
        </div>
    </div>
</div>
