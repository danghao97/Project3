<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Đối tượng</h3>
    </div>
    <div class="panel-body">
        @if (count($doi_tuongs) == 0)
            <div class="h2">
                Chưa có đối tượng nào, hãy thêm ngay
            </div>
        @else
            @foreach ($doi_tuongs as $doi_tuong)
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#info{{$doi_tuong->id_doi_tuong}}" id="info{{$doi_tuong->id_doi_tuong}}-tab" role="tab" data-toggle="tab" aria-controls="info{{$doi_tuong->id_doi_tuong}}" aria-expanded="true">{{$doi_tuong->ten_doi_tuong}}</a>
                                </li>
                                <li role="presentation">
                                    <a href="#video{{$doi_tuong->id_doi_tuong}}" id="video{{$doi_tuong->id_doi_tuong}}-tab" role="tab" data-toggle="tab" aria-controls="video{{$doi_tuong->id_doi_tuong}}" aria-expanded="true">Videos</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" role="tabpanel" id="info{{$doi_tuong->id_doi_tuong}}" aria-labelledby="info{{$doi_tuong->id_doi_tuong}}-tab">
                                    <div class="col-md-2">
                                        <label>Photo:</label><br>
                                        @if ($doi_tuong->photo == '')
                                            <img class="img-responsive" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/doi_tuong/image/{{$doi_tuong->id_doi_tuong}}.{{$doi_tuong->photo_extension}}">
                                        @else
                                            <img class="img-responsive" src="data:image;base64,{{$doi_tuong->photo}}" alt="">
                                        @endif
                                        <br><a class="btn btn-primary" href="VanHanh/XoaDoiTuong/{{$doi_tuong->id_doi_tuong}}" role="button">Xóa</a>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Mã số:</label> {{$doi_tuong->id_doi_tuong}}<br>
                                        <label>Loại đối tượng:</label> {{$doi_tuong->LoaiDoiTuong->ten_loai}}<br>
                                        <label>Mức độ ảnh hưởng:</label> {{$doi_tuong->LoaiDoiTuong->CapDo->muc_do_anh_huong}}
                                    </div>
                                    <div class="col-md-4">
                                        <label>Tên đối tượng:</label> {{$doi_tuong->ten_doi_tuong}}<br>
                                        <label>Tuổi:</label> {{$doi_tuong->tuoi}}<br>
                                        <label>Nghề nghiệp:</label> {{$doi_tuong->nghe_nghiep}}<br>
                                        <label>Chức vụ:</label> {{$doi_tuong->chuc_vu}}
                                    </div>
                                </div>
                                <div class="tab-pane fade" role="tabpanel" id="video{{$doi_tuong->id_doi_tuong}}" aria-labelledby="video{{$doi_tuong->id_doi_tuong}}-tab">
                                    <div class="col-md-5">
                                        <label>Videos:</label>
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <video id="current" class="embed-responsive-item" src="http://{{$_SERVER['SERVER_NAME']}}:{{$NodeJS_Port}}/doi_tuong/video/{{$doi_tuong->id_doi_tuong}}.{{$doi_tuong->video_extension}}"></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {!!$doi_tuongs->links();!!}
        @endif
    </div>
</div>
