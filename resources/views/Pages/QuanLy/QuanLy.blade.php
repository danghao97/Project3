@extends('Layouts.CustomLayout.Layout')

@section('CustomTitle')
    Quản lý
@endsection

@section('Content')
    <header>
        @include('Layouts.QuanLy.Header')
    </header>
    <div class="container">
        <div class="row">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-9">
                        @include('Layouts.QuanLy.NguoiDung.DanhSach')
                    </div>
                    <div class="col-md-3">
                        @include('Layouts.QuanLy.NguoiDung.Them')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        @include('Layouts.QuanLy.Footer')
    </footer>
@endsection
