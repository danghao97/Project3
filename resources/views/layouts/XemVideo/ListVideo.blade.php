<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Video khac</h3>
    </div>
    <div class="panel-body row">
        <div class="list">
            @foreach($videos as $value)
                <div class="col-md-9">
                    <img class="img-responsive" src="http://{{$_SERVER['SERVER_NAME']}}:3000/image">
                </div>
                <div class="col-md-3">
                    <a href="/XemVideo/{{$value->id_video}}">{{$value->ten_video}}</a>
                    <br>
                    {{$value->thoi_gian}}
                </div>
            @endforeach
        </div>
    </div>
</div>
