<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Danh sách người dùng</h3>
    </div>
    <div class="panel-body">
        @if (count($users) == 0)
            <div class="h2">
                Chưa có người dùng, hãy thêm ngay
            </div>
        @else
            @foreach ($users as $user)
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Mã số:</label> {{$user->id}}<br>
                                <label>Tên:</label> {{$user->name}}<br>
                                <label>Email:</label> {{$user->email}}<br>
                                <a class="btn btn-primary" href="QuanLy/XoaUser/{{$user->id}}" role="button">Xóa</a>
                            </div>
                            <div class="col-md-4">
                                <label>Giới tính:</label> {{$user->gioi_tinh}}<br>
                                <label>Số điện thoại:</label> {{$user->so_dien_thoai}}<br>
                                <label>Quê quán:</label> {{$user->que_quan}}
                            </div>
                            <div class="col-md-4">
                                <label>Năm sinh:</label> {{$user->nam_sinh}}<br>
                                <label>Đơn vị:</label> {{$user->don_vi}}<br>
                                <label>Chức vụ:</label> {{$chuc_vus[$user->chuc_vu]}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {!!$users->links()!!}
        @endif
    </div>
</div>
