@extends('Layouts.CustomLayout.Layout')

@section('CustomTitle')
    Vận hành hệ thống
@endsection

@section('Content')
    <header>
        @include('Layouts.VanHanh.Header')
    </header>
    <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="{!!($tab_active == 'DoiTuong' ? 'active' : '')!!}">
                <a href="#Tab_DoiTuong" role="tab" data-toggle="tab" aria-controls="Tab_DoiTuong" aria-expanded="true">Đối tượng</a>
            </li>
            <li role="presentation" class="{!!($tab_active == 'Video' ? 'active' : '')!!}">
                <a href="#Tab_Video" role="tab" data-toggle="tab" aria-controls="Tab_Video" aria-expanded="true">Video</a>
            </li>
            <li role="presentation">
                <a href="#Tab_CapDo" role="tab" data-toggle="tab" aria-controls="Tab_CapDo" aria-expanded="true">Cấp độ</a>
            </li>
            <li role="presentation">
                <a href="#Tab_LoaiDoiTuong" role="tab" data-toggle="tab" aria-controls="Tab_LoaiDoiTuong" aria-expanded="true">Loại đối tượng</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade {!!($tab_active == 'Video' ? 'active in' : '')!!}" role="tabpanel" id="Tab_Video">
                <div class="panel">
                    <div class="panel-body">
                        <div class="col-md-9">
                            @include('Layouts.VanHanh.Video.DanhSach')
                        </div>
                        <div class="col-md-3">
                            @include('Layouts.VanHanh.Video.Them')
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {!!($tab_active == 'DoiTuong' ? 'active in' : '')!!}" role="tabpanel" id="Tab_DoiTuong">
                <div class="panel">
                    <div class="panel-body">
                        <div class="col-md-9">
                            @include('Layouts.VanHanh.DoiTuong.DanhSach')
                        </div>
                        <div class="col-md-3">
                            @include('Layouts.VanHanh.DoiTuong.Them')
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="Tab_CapDo">
                <div class="panel">
                    <div class="panel-body">
                        <div class="col-md-6 col-md-offset-3">
                            @include('Layouts.VanHanh.CapDo.CapDo')
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="Tab_LoaiDoiTuong">
                <div class="panel">
                    <div class="panel-body">
                        <div class="col-md-6 col-md-offset-3">
                            @include('Layouts.VanHanh.LoaiDoiTuong.LoaiDoiTuong')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        @include('Layouts.VanHanh.Footer')
    </footer>
@endsection
