<div class="panel panel-info">
    <div class="panel-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên cấp độ</th>
                    <th>Mức độ ảnh hưởng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if (count($cap_dos) == 0)
                    <tr>
                        <td colspan="4" class="text-center">Không có dữ liệu</td>
                    </tr>
                @endif
                @foreach ($cap_dos as $cap_do)
                    <tr>
                        <th scope="row">{{$cap_do->id_cap_do}}</th>
                        <td>{{$cap_do->ten_cap_do}}</td>
                        <td>{{$cap_do->muc_do_anh_huong}}</td>
                        <td>
                            <a href="/VanHanh/DelCapDo/{{$cap_do->id_cap_do}}" role="button" class="btn btn-primary btn-xs">Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action='/VanHanh/AddCapDo' class="form-inline text-center" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="tencapdo">Tên: </label>
                <input type="text" class="form-control input-sm" id="tencapdo" placeholder="Tên cấp độ" name="tencapdo">
            </div>
            <div class="form-group">
                <label for="mucdo">Mức độ: </label>
                <input type="text" class="form-control input-sm" id="mucdo" placeholder="Mức độ ảnh hưởng" name="mucdo">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Thêm</button>
        </form>
    </div>
</div>
