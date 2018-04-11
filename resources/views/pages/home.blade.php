@extends('layouts.master')
@section('title')
    HomePage
@endsection
@section('navitem')home @endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    @include('layouts.GiamSat.CurrentVideo')
                </div>
                <div class="col-md-4">
                    @include('layouts.GiamSat.FormSearch')
                </div>
            </div>
        </div>
    </div>
@endsection
