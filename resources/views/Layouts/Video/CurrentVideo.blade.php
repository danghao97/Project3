<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">{{$video->ten_video}}</h3>
    </div>
    <div class="panel-body">
        <div class="embed-responsive embed-responsive-16by9">
            <video controls id="current" class="embed-responsive-item" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/video/{{$video->id_video}}"></video>
        </div>
        <p>Tên video: {{$video->ten_video}}</p>
        <p>Thời lượng quay: {{$video->thoi_gian}}</p>
        <p>Kich thuoc: {{$video->kich_thuoc}}</p>
        <button type="button">Sửa thông tin video</button>
        <button type="button">Xóa video</button>
        <select title="Select your surfboard" class="selectpicker">
            <option>Select...</option>
            <option data-thumbnail="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/image">Chrome</option>
            <option data-thumbnail="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/image">Firefox</option>
            <option data-thumbnail="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/image">IE</option>
            <option data-thumbnail="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/image">Opera</option>
            <option data-thumbnail="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/image">Safari</option>
        </select>
    </div>
</div>
