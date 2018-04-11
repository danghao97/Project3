<div class="card border-success">
    <div class="h5 card-header text-success">
        Đối tượng
    </div>
    <div class="card-body">
        @if (count($doi_tuongs) == 0)
            <div class="h2">
                Chưa có đối tượng nào, hãy thêm ngay
            </div>
        @else
            @foreach ($doi_tuongs as $doi_tuong)
                <div class="card border-success">
                    <div class="card-body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link show active" data-toggle="tab" href="#info{{$doi_tuong->id_doi_tuong}}">{{$doi_tuong->ten_doi_tuong}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#video{{$doi_tuong->id_doi_tuong}}">Videos</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="info{{$doi_tuong->id_doi_tuong}}" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Photo:</label><br>
                                        <img class="img-fluid" src="http://{{$_SERVER['SERVER_NAME']}}:3000/image">
                                    </div>
                                    <div class="col-md-5">
                                        <label>Mã số:</label> {{$doi_tuong->id_doi_tuong}}<br>
                                        <label>Loại đối tượng:</label> {{$doi_tuong->LoaiDoiTuong->ten_loai}}<br>
                                        <label>Mức độ ảnh hưởng:</label> {{$doi_tuong->LoaiDoiTuong->CapDo->muc_do_anh_huong}}
                                    </div>
                                    <div class="col-md-5">
                                        <label>Tên đối tượng:</label> {{$doi_tuong->ten_doi_tuong}}<br>
                                        <label>Tuổi:</label> {{$doi_tuong->tuoi}}<br>
                                        <label>Nghề nghiệp:</label> {{$doi_tuong->nghe_nghiep}}<br>
                                            <label>Chức vụ:</label> {{$doi_tuong->chuc_vu}}
                                    </div>
                                </div>
                            </div>
                            <div id="video{{$doi_tuong->id_doi_tuong}}" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Videos:</label>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video id="current" class="embed-responsive-item" src="http://{{$_SERVER['SERVER_NAME']}}:3000/video/1"></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        {!!$doi_tuongs->links();!!}
    </div>
</div>
