<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Danh sách video</h3>
    </div>
    <div class="panel-body">
        @if (count($videos) == 0)
            <div class="h2">
                Chưa có video, hãy thêm ngay
            </div>
        @else
            @foreach ($videos as $video)
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Mã số:</label> {{$video->id_video}}<br>
                                <label>Đối tượng:</label> {{$video->DoiTuong->ten_doi_tuong}}<br>
                                <label>Tên video:</label> {{$video->ten_video}}<br>
                                <a class="btn btn-primary" href="QLHT/XoaVD/{{$video->id_video}}" role="button">Xóa</a>
                            </div>
                            <div class="col-md-4">
                                <label>Đường dẫn:</label> {{$video->duong_dan}}<br>
                                <label>Kích thước:</label> {{$video->kich_thuoc}}
                            </div>
                            <div class="col-md-4">
                                <label>Thời gian bắt đầu:</label> {{$video->thoigian_batdau}}<br>
                                <label>Thời lượng:</label> {{$video->thoi_gian}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {!!$videos->links()!!}
        @endif
    </div>
</div>
