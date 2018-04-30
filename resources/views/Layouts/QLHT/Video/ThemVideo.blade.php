<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Thêm video</h3>
    </div>
    <div class="panel-body">
        @if (count($doi_tuongs) == 0)
            <div class="h2">
                Hãy thêm một đối tượng trước
            </div>
        @else
            @if ($errors->has('vd_title'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{$errors->first('vd_title')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="/QLHT/ThemVD" method='POST'>
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="vd_dt">Đối tượng</label>
                    <select id="vd_dt" class="form-control input-sm" name="vd_dt">
                        @foreach ($doi_tuongs as $doi_tuong)
                            <option value="{{$doi_tuong->id_doi_tuong}}">{{$doi_tuong->ten_doi_tuong}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="vd_name">Tên video</label>
                    <input id="vd_name" type="text" class="form-control input-sm" placeholder="Tên video" name="vd_name">
                </div>
                <div class="form-group">
                    <label for="vd_duongdan">Đường dẫn</label>
                    <input id="vd_duongdan" type="text" class="form-control input-sm" placeholder="Đường dẫn" name="vd_duongdan">
                </div>
                <div class="form-group">
                    <label for="vd_kichthuoc">Kích thước</label>
                    <input id="vd_kichthuoc" type="text" class="form-control input-sm" placeholder="Kích thước" name="vd_kichthuoc">
                </div>
                <div class="form-group">
                    <label for="vd_start">Thời gian bắt đầu</label>
                    <input id="vd_start" type="text" class="form-control input-sm" placeholder="Thời gian bắt đầu" name="vd_start">
                </div>
                <div class="form-group">
                    <label for="vd_time">Thời lượng</label>
                    <input id="vd_time" type="text" class="form-control input-sm" placeholder="Thời lượng" name="vd_time">
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        @endif
    </div>
</div>
