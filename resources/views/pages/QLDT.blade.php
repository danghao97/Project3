@extends('layouts.master')
@section('title')
    Quản lý đối tượng
@endsection
@section('navitem')qldt @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#quanlydoituong">Đối tượng</a></li>
                <li><a data-toggle="tab" href="#quanlynguoidung">Người dùng</a></li>
                <li><a data-toggle="tab" href="#quanlyvideo">Video</a></li>
            </ul>

            <div class="tab-content">
                <div id="quanlydoituong" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-9">
                            @include('layouts.QLDT.ThongTinDoiTuong')
                        </div>
                        <div class="col-md-3">
                            @include('layouts.QLDT.ThemDoiTuong')
                        </div>
                    </div>
                </div>
                <div id="quanlynguoidung" class="tab-pane fade">
                    Quản lý người dùng
                </div>
                <div id="quanlyvideo" class="tab-pane fade">
                    Quản lý video
                </div>
            </div>
        </div>
    </div>
@endsection
