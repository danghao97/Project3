<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">Giam sat</h3>
    </div>
    <div class="panel-body">
        <form method='POST'>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Ten doi tuong</label>
                <input type="text" class="form-control" placeholder="Ten doi tuong" name="ten">
            </div>
            <div class="form-group">
                <label for="namsinh">Tuoi</label>
                <input type="text" class="form-control" placeholder="Tuoi" name="tuoi">
            </div>
            <div class="form-group">
                <label for="namsinh">Nghe nghiep</label>
                <input type="text" class="form-control" placeholder="Nghe nghiep" name="nghenghiep">
            </div>
            <div class="form-group">
                <label for="namsinh">Chuc vu</label>
                <input type="text" class="form-control" placeholder="Chuc vu" name="chucvu">
            </div>
            <div class="form-group">
                <label for="exampleSelect1">Loai doi tuong</label>
                <select class="form-control" name="loaidoituong">
                    @foreach ($loai_doi_tuongs as $loai_doi_tuong)
                        <option value="{{$loai_doi_tuong->id_loai_doi_tuong}}">{{$loai_doi_tuong->ten_loai}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
