<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">{{$video->ten_video}}</h3>
    </div>
    <div class="panel-body">
        <div class="panel panel-info panel-body embed-responsive embed-responsive-16by9">
            <video controls id="current" class="embed-responsive-item" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/video/{{$video->id_video}}"></video>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Thông tin video</h3>
            </div>
            <div class="panel-body">
                <p>Tên video: {{$video->ten_video}}</p>
                <p>Thời lượng quay: {{$video->thoi_gian}}</p>
                <p>Kich thuoc: {{$video->kich_thuoc}}</p>
            </div>
        </div>

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Các đối tượng xuất hiện
                </h3>
            </div>
            <div class="panel-body">
                <div class="col-md-6">
                    <div class="panel panel-default panel-body" id="listobject">
                        @foreach ($doi_tuong_xuat_hiens as $dtxh)
                            <div class="panel panel-info panel-body">
                                <div class="col-md-4">
                                    <img class="img-responsive" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/doi_tuong/image/{{$dtxh->DoiTuong->id_doi_tuong}}.{{$dtxh->DoiTuong->photo_extension}}">
                                </div>
                                <div class="col-md-8">
                                    <label>Tên:</label> {{$dtxh->DoiTuong->ten_doi_tuong}}<br>
                                    <label>Thời điểm:</label> {{$dtxh->thoi_diem_xuat_hien}}<br>
                                    <label>Thời gian:</label> {{$dtxh->thoi_gian_xuat_hien}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default panel-body">
                        <div class="dropdown">
                            <button style="width: 100%; text-align: left;" type="button" class="btn btn-default dropdown-toggle" id="btn-dropdown-object" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Chọn đối tượng
                                <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu" aria-labelledby="btn-dropdown-object" style="width: 100%;">
                                @foreach ($doi_tuongs as $doi_tuong)
                                    <li>
                                        <a href="javascript:objectsel('{{$doi_tuong->id_doi_tuong}}')">
                                            {{$doi_tuong->ten_doi_tuong}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <img id="oava" class="img-responsive" src="data:image;base64,iVBORw0KGgoAAAANSUhEUgAAAyAAAAMgCAIAAABUEpE/AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYxIDY0LjE0MDk0OSwgMjAxMC8xMi8wNy0xMDo1NzowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpGNzdGMTE3NDA3MjA2ODExODA4M0VCODNDNjJCRDdDMSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDowNkFBNDk5MEM2OUExMUUyQTBEOEQwQUY2RkU5MUFFMyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDowNkFBNDk4RkM2OUExMUUyQTBEOEQwQUY2RkU5MUFFMyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1LjEgV2luZG93cyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjREMERDMDA3NTdBREUyMTFCRjNFQjA4QjQ3MzZEN0E5IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkY3N0YxMTc0MDcyMDY4MTE4MDgzRUI4M0M2MkJEN0MxIi8+IDwvcmRmOkRlc2NyaXB0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">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ip-id">Tên:</label> <span id="ip-name">Chưa chọn</span>
                                    <input id="ip-id" type="hidden" class="form-control input-sm">
                                </div>
                                <div class="form-group">
                                    <label for="ip-tdxh">Thời điểm xuất hiện:</label>
                                    <input id="ip-tdxh" type="text" class="form-control input-sm" placeholder="Thời điểm xuất hiện">
                                </div>
                                <div class="form-group">
                                    <label for="ip-tgxh">Thời gian xuất hiện:</label>
                                    <input id="ip-tgxh" type="text" class="form-control input-sm" placeholder="Thời gian xuất hiện">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="button" name="button" class="btn btn-default" onclick="add()">ADD</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('CustomJS')
    <script type="text/javascript">
        var ab = JSON.parse('{!!$doi_tuongs!!}');
        var token = '{{csrf_token()}}';

        function add() {
            var idv = {{$id_video}};
            var ido = $('#ip-id').val();
            var tdxh = $('#ip-tdxh').val();
            var tgxh = $('#ip-tgxh').val();
            var doi_tuong;
            for (var i = 0; i < ab.length; i++) {
                if (ab[i].id_doi_tuong == ido) {
                    doi_tuong = ab[i];
                }
            }
            if (ido == '' || tdxh == '' || tgxh == '') {
                console.log('invalid input');
                return;
            }
            $.ajaxSetup({
                header: {

                }
            });
            $.ajax({
                url: "{{url('VanHanh/AddObjectToVideo')}}",
                method: 'post',
                data: {
                    idv: idv,
                    ido: ido,
                    tdxh: tdxh,
                    tgxh: tgxh,
                    _token: token
                },
                success: (data) => {
                    if (data == 'ok') {
                        var item = '<div class="panel panel-info panel-body">';
                        item += '<div class="col-md-4">';
                        item += '<img class="img-responsive" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/doi_tuong/image/' + doi_tuong.id_doi_tuong + '.' + doi_tuong.photo_extension + '">';
                        item += '</div>';
                        item += '<div class="col-md-8">';
                        item += '<label>Tên:</label> ' + doi_tuong.ten_doi_tuong + '<br>';
                        item += '<label>Thời điểm:</label> ' + tdxh + '<br>';
                        item += '<label>Thời gian:</label> ' + tgxh;
                        item += '</div>';
                        item += '</div>';
                        $('#listobject').append(item);
                    }
                }
            });
        }

        function objectsel(id) {
            for (var i = 0; i < ab.length; i++) {
                if (ab[i].id_doi_tuong == id) {
                    src = "http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/doi_tuong/image/";
                    src += ab[i].id_doi_tuong + "." + ab[i].photo_extension;
                    $('#oava').attr('src', src);
                    $('#ip-name').html(ab[i].ten_doi_tuong);
                    $('#ip-id').val(ab[i].id_doi_tuong);
                }
            }
        }
    </script>
@endsection
