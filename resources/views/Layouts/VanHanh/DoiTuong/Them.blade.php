<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Thêm đối tượng</h3>
    </div>
    <div class="panel-body">
        @if (count($loai_doi_tuongs) == 0)
            <div class="h2">
                Chưa có đối tượng nào, hãy thêm ngay
            </div>
        @else
            @if ($errors->has('dt_title'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    {{$errors->first('dt_title')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action='/VanHanh/ThemDoiTuong' method='POST' enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="dt_name">Tên đối tượng</label>
                    <input id="dt_name" type="text" class="form-control input-sm" placeholder="Tên đối tượng" name="dt_name">
                </div>
                <div class="form-group form-group-sm">
                    <label for="dt_namsinh">Tuổi</label>
                    <input id="dt_namsinh" type="text" class="form-control input-sm" placeholder="Tuổi" name="dt_namsinh">
                </div>
                <div class="form-group form-group-sm">
                    <label for="dt_nghenghiep">Nghề nghiệp</label>
                    <input id="dt_nghenghiep" type="text" class="form-control input-sm" placeholder="Nghề nghiệp" name="dt_nghenghiep">
                </div>
                <div class="form-group">
                    <label for="dt_chucvu">Chức vụ</label>
                    <input id="dt_chucvu" type="text" class="form-control input-sm" placeholder="Chức vụ" name="dt_chucvu">
                </div>
                <div class="form-group">
                    <label for="dt_loaidoituong">Loại đối tượng</label>
                    <select id="dt_loaidoituong" class="form-control input-sm" name="dt_loaidoituong">
                        @foreach ($loai_doi_tuongs as $loai_doi_tuong)
                            <option value="{{$loai_doi_tuong->id_loai_doi_tuong}}">{{$loai_doi_tuong->ten_loai}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="dt_photo">Ảnh nhận diện</label>
                    <input id="dt_photo" type="file" class="form-control-file input-sm" name="dt_photo">
                </div>
                <div class="form-group">
                    <label for="dt_video">Video nhận diện</label>
                    <input id="dt_video" type="file" class="form-control-file input-sm" name="dt_video">
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        @endif
    </div>
</div>
