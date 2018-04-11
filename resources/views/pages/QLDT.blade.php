@extends('layouts.master')
@section('title')
    Quản lý đối tượng
@endsection
@section('navitem')qldt @endsection
@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a data-toggle="tab" href="#qldt2" class="nav-link {!!($tab_active == 'qldt' ? 'active show' : '')!!}">Đối tượng</a>
        </li>
        <li class="nav-item">
            <a data-toggle="tab" href="#qlnd" class="nav-link {!!($tab_active == 'qlnd' ? 'active show' : '')!!}">Người dùng</a>
        </li>
        <li class="nav-item">
            <a data-toggle="tab" href="#qlvd" class="nav-link {!!($tab_active == 'qlvd' ? 'active show' : '')!!}">Video</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="qldt2" class="tab-pane fade {!!($tab_active == 'qldt' ? 'show active' : '')!!}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            @include('layouts.QLDT.ThongTinDoiTuong')
                        </div>
                        <div class="col-md-3">
                            @include('layouts.QLDT.ThemDoiTuong')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="qlnd" class="tab-pane fade {!!($tab_active == 'qlnd' ? 'show active' : '')!!}">
            <div class="card">
                <div class="card-body">
                    <div class="h3">
                        Quản lý người dùng
                    </div>
                    {!!$users->links()!!}
                </div>
            </div>
        </div>
        <div id="qlvd" class="tab-pane fade {!!($tab_active == 'qlvd' ? 'show active' : '')!!}">
            <div class="card">
                <div class="card-body">
                    <div class="h3">
                        Quản lý video
                    </div>
                    {!!$videos->links()!!}
                </div>
            </div>
        </div>
    </div>
@endsection
