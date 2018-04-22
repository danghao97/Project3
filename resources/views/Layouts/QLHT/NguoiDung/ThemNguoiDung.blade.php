<div class="card border-success">
    <div class="h5 card-header text-success">
        Thêm người dùng
    </div>
    <div class="card-body">
        @if ($errors->has('nd_title'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{$errors->first('nd_title')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action='/QLHT/ThemND' method='POST'>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nd_name">Tên người dùng</label>
                <input id="nd_name" type="text" class="form-control form-control-sm" placeholder="Tên người dùng" name="nd_name">
            </div>
            <div class="form-group">
                <label for="nd_gioitinh">Giới tính</label>
                <select id="nd_gioitinh" class="form-control form-control-sm" name="nd_gioitinh">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nd_email">Email</label>
                <input id="nd_email" type="text" class="form-control form-control-sm" placeholder="Email" name="nd_email">
            </div>
            <div class="form-group">
                <label for="nd_sdt">Số điện thoại</label>
                <input id="nd_sdt" type="text" class="form-control form-control-sm" placeholder="Số điện thoại" name="nd_sdt">
            </div>
            <div class="form-group">
                <label for="nd_quequan">Quê quán</label>
                <input id="nd_quequan" type="text" class="form-control form-control-sm" placeholder="Quê quán" name="nd_quequan">
            </div>
            <div class="form-group">
                <label for="nd_namsinh">Năm sinh</label>
                <input id="nd_namsinh" type="text" class="form-control form-control-sm" placeholder="Năm sinh" name="nd_namsinh">
            </div>
            <div class="form-group">
                <label for="nd_donvi">Đơn vị</label>
                <input id="nd_donvi" type="text" class="form-control form-control-sm" placeholder="Đơn vị" name="nd_donvi">
            </div>
            <div class="form-group">
                <label for="nd_chucvu">Chức vụ</label>
                <input id="nd_chucvu" type="text" class="form-control form-control-sm" placeholder="Chức vụ" name="nd_chucvu">
            </div>
            <div class="form-group">
                <label for="nd_password">Mật khẩu</label>
                <input id="nd_password" type="password" class="form-control" placeholder="Mật khẩu" name="nd_password">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
