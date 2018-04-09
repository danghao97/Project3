@extends('layouts.master')
@section('title')
    Quản lý đối tượng
@endsection
@section('navitem')qldt @endsection
@section('content')
    <ul class="nav nav-tabs">
        <li {!!($tab_active == 'quanlydoituong' ? 'class="active"' : '')!!}><a data-toggle="tab" href="#quanlydoituong">Đối tượng</a></li>
        <li {!!($tab_active == 'quanlynguoidung' ? 'class="active"' : '')!!}><a data-toggle="tab" href="#quanlynguoidung">Người dùng</a></li>
        <li {!!($tab_active == 'quanlyvideo' ? 'class="active"' : '')!!}><a data-toggle="tab" href="#quanlyvideo">Video</a></li>
    </ul>

    <div class="tab-content">
        <div id="quanlydoituong" class="tab-pane fade {!!($tab_active == 'quanlydoituong' ? 'in active' : '')!!}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-9">
                        @include('layouts.QLDT.ThongTinDoiTuong')
                    </div>
                    <div class="col-md-3">
                        @include('layouts.QLDT.ThemDoiTuong')
                    </div>
                </div>
            </div>
        </div>
        <div id="quanlynguoidung" class="tab-pane fade {!!($tab_active == 'quanlynguoidung' ? 'in active' : '')!!}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="h3">
                        Quản lý người dùng
                    </div>
                    {!!$users->links()!!}
                </div>
            </div>
        </div>
        <div id="quanlyvideo" class="tab-pane fade {!!($tab_active == 'quanlyvideo' ? 'in active' : '')!!}">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="h3">
                        Quan ly video
                    </div>
                    {!!$videos->links()!!}
                </div>
            </div>
        </div>
    </div>
@endsection
