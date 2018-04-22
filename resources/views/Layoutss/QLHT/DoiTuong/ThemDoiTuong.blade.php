<div class="card border-success">
    <div class="h5 card-header text-success">
        Thêm đối tượng
    </div>
    <div class="card-body">
        @if ($errors->has('dt_title'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{$errors->first('dt_title')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action='/QLHT/ThemDT' method='POST' enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="dt_name">Tên đối tượng</label>
                <input id="dt_name" type="text" class="form-control form-control-sm" placeholder="Tên đối tượng" name="dt_name">
            </div>
            <div class="form-group">
                <label for="dt_namsinh">Tuổi</label>
                <input id="dt_namsinh" type="text" class="form-control form-control-sm" placeholder="Tuổi" name="dt_namsinh">
            </div>
            <div class="form-group">
                <label for="dt_nghenghiep">Nghề nghiệp</label>
                <input id="dt_nghenghiep" type="text" class="form-control form-control-sm" placeholder="Nghề nghiệp" name="dt_nghenghiep">
            </div>
            <div class="form-group">
                <label for="dt_chucvu">Chức vụ</label>
                <input id="dt_chucvu" type="text" class="form-control form-control-sm" placeholder="Chức vụ" name="dt_chucvu">
            </div>
            <div class="form-group">
                <label for="dt_loaidoituong">Loại đối tượng</label>
                <select id="dt_loaidoituong" class="form-control form-control-sm" name="dt_loaidoituong">
                    @foreach ($loai_doi_tuongs as $loai_doi_tuong)
                        <option value="{{$loai_doi_tuong->id_loai_doi_tuong}}">{{$loai_doi_tuong->ten_loai}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dt_photo">Ảnh nhận diện</label>
                <input id="dt_photo" type="file" class="form-control-file" name="dt_photo">
            </div>
            <div class="form-group">
                <label for="dt_video">Video nhận diện</label>
                <input id="dt_video" type="file" class="form-control-file" name="dt_video">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
