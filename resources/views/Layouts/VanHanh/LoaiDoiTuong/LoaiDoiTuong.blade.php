<div class="panel panel-info">
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên loại</th>
                    <th>Cấp độ</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (count($loai_doi_tuongs) == 0)
                    <tr>
                        <td colspan="4" class="text-center">Không có dữ liệu</td>
                    </tr>
                @endif
                @foreach ($loai_doi_tuongs as $loai_doi_tuong)
                    <tr>
                        <th scope="row">{{$loai_doi_tuong->id_loai_doi_tuong}}</th>
                        <td>{{$loai_doi_tuong->ten_loai}}</td>
                        <td>{{$loai_doi_tuong->CapDo->ten_cap_do}}: {{$loai_doi_tuong->CapDo->muc_do_anh_huong}}</td>
                        <td>
                            <a href="/VanHanh/DelLoaiDoiTuong/{{$loai_doi_tuong->id_loai_doi_tuong}}" role="button" class="btn btn-primary btn-xs">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (count($cap_dos) == 0)
            <h5 class="text-center">Hãy thêm cấp độ trước để thêm loại đối tượng</h2>
        @else
            <form action='/VanHanh/AddLoaiDoiTuong' class="form-inline text-center" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="tenloai">Tên loại: </label>
                    <input type="text" class="form-control input-sm" id="tenloai" placeholder="Tên loại" name="tenloai">
                </div>
                <div class="form-group">
                    <label for="idcapdo">Cấp độ: </label>
                    <select id="idcapdo" class="form-control input-sm" name="idcapdo">
                        @foreach ($cap_dos as $cap_do)
                            <option value="{{$cap_do->id_cap_do}}">{{$cap_do->ten_cap_do}}: {{$cap_do->muc_do_anh_huong}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Thêm</button>
            </form>
        @endif
    </div>
</div>
