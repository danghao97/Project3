<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Doi tuong</h3>
    </div>
    <div class="panel-body">
        @if (count($doi_tuongs) == 0)
            <div class="h1">
                Chưa có đối tượng nào
            </div>
        @else
            @foreach ($doi_tuongs as $doi_tuong)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#info{{$doi_tuong->id_doi_tuong}}">{{$doi_tuong->ten_doi_tuong}}</a></li>
                            <li><a data-toggle="tab" href="#video{{$doi_tuong->id_doi_tuong}}">Videos</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="info{{$doi_tuong->id_doi_tuong}}" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label>Photo:</label><br>
                                        <img class="img-responsive" src="http://{{$_SERVER['SERVER_NAME']}}:3000/image">
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
