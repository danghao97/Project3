@extends('Layouts.CustomLayout.Layout')
@section('CustomTitle')
    Quản lý đối tượng
@endsection

@section('NavBar')qlht @endsection

@section('Content')
    <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="{!!($tab_active == 'qldt' ? 'active' : '')!!}">
                <a href="#qldt2" id="qldt2-tab" role="tab" data-toggle="tab" aria-controls="qldt2" aria-expanded="true">Đối tượng</a>
            </li>
            <li role="presentation" class="{!!($tab_active == 'qlvd' ? 'active' : '')!!}">
                <a href="#qlvd" id="qlvd-tab" role="tab" data-toggle="tab" aria-controls="qlvd" aria-expanded="true">Video</a>
            </li>
            <li role="presentation" class="{!!($tab_active == 'qlnd' ? 'active' : '')!!}">
                <a href="#qlnd" id="qlnd-tab" role="tab" data-toggle="tab" aria-controls="qlnd" aria-expanded="true">Đối tượng</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade {!!($tab_active == 'qldt' ? 'active in' : '')!!}" role="tabpanel" id="qldt2" aria-labelledby="qldt2-tab">
                <div class="panel">
                    <div class="panel-body">
                            <div class="col-md-9">
                                @include('Layouts.QLHT.DoiTuong.ThongTinDoiTuong')
                            </div>
                            <div class="col-md-3">
                                @include('Layouts.QLHT.DoiTuong.ThemDoiTuong')
                            </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {!!($tab_active == 'qlvd' ? 'active in' : '')!!}" role="tabpanel" id="qlvd" aria-labelledby="qlvd-tab">
                <div class="panel">
                    <div class="panel-body">
                            <div class="col-md-9">
                                @include('Layouts.QLHT.Video.DanhSach')
                            </div>
                            <div class="col-md-3">
                                @include('Layouts.QLHT.Video.ThemVideo')
                            </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {!!($tab_active == 'qlnd' ? 'active in' : '')!!}" role="tabpanel" id="qlnd" aria-labelledby="qlnd-tab">
                <div class="panel">
                    <div class="panel-body">
                            <div class="col-md-9">
                                @include('Layouts.QLHT.NguoiDung.DanhSach')
                            </div>
                            <div class="col-md-3">
                                @include('Layouts.QLHT.NguoiDung.ThemNguoiDung')
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
