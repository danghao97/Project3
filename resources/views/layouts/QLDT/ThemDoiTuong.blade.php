<div class="card border-success">
    <div class="h5 card-header text-success">
        Giám sát
    </div>
    <div class="card-body">
        <form method='POST'>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Tên đối tượng</label>
                <input id="name" type="text" class="form-control" placeholder="Tên đối tượng" name="ten">
            </div>
            <div class="form-group">
                <label for="namsinh">Tuổi</label>
                <input id="namsinh" type="text" class="form-control" placeholder="Tuổi" name="tuoi">
            </div>
            <div class="form-group">
                <label for="nghenghiep">Nghề nghiệp</label>
                <input id="nghenghiep" type="text" class="form-control" placeholder="Nghề nghiệp" name="nghenghiep">
            </div>
            <div class="form-group">
                <label for="chucvu">Chức vụ</label>
                <input id="chucvu" type="text" class="form-control" placeholder="Chức vụ" name="chucvu">
            </div>
            <div class="form-group">
                <label for="loaidoituong">Loại đối tượng</label>
                <select id="loaidoituong" class="form-control" name="loaidoituong">
                    @foreach ($loai_doi_tuongs as $loai_doi_tuong)
                        <option value="{{$loai_doi_tuong->id_loai_doi_tuong}}">{{$loai_doi_tuong->ten_loai}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
