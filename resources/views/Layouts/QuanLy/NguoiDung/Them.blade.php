<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Thêm người dùng</h3>
    </div>
    <div class="panel-body">
        @if ($errors->has('nd_title'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{$errors->first('nd_title')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form action='/QuanLy/ThemUser' method='POST'>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nd_name">Tên người dùng</label>
                <input id="nd_name" type="text" class="form-control input-sm" placeholder="Tên người dùng" name="nd_name">
            </div>
            <div class="form-group">
                <label for="nd_gioitinh">Giới tính</label>
                <select id="nd_gioitinh" class="form-control input-sm" name="nd_gioitinh">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nd_email">Email</label>
                <input id="nd_email" type="text" class="form-control input-sm" placeholder="Email" name="nd_email">
            </div>
            <div class="form-group">
                <label for="nd_sdt">Số điện thoại</label>
                <input id="nd_sdt" type="text" class="form-control input-sm" placeholder="Số điện thoại" name="nd_sdt">
            </div>
            <div class="form-group">
                <label for="nd_quequan">Quê quán</label>
                <input id="nd_quequan" type="text" class="form-control input-sm" placeholder="Quê quán" name="nd_quequan">
            </div>
            <div class="form-group">
                <label for="nd_namsinh">Năm sinh</label>
                <input id="nd_namsinh" type="text" class="form-control input-sm" placeholder="Năm sinh" name="nd_namsinh">
            </div>
            <div class="form-group">
                <label for="nd_donvi">Đơn vị</label>
                <input id="nd_donvi" type="text" class="form-control input-sm" placeholder="Đơn vị" name="nd_donvi">
            </div>
            <div class="form-group">
                <label for="nd_chucvu">Chức vụ</label>
                <select id="nd_chucvu" class="form-control input-sm" name="nd_chucvu">
                    @foreach ($chuc_vus as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nd_password">Mật khẩu</label>
                <input id="nd_password" type="password" class="form-control input-sm" placeholder="Mật khẩu" name="nd_password">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
