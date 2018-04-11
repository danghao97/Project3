<div class="card border-success">
    <div class="h5 card-header text-success">
        Thông tin giám sát
    </div>
    <div class="card-body">
        <form method='POST'>
            <div class="form-group">
                <label for="doituong">Tên đối tượng</label>
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        Lựa chọn đối tượng
                        <span class="caret"></span>
                    </button>
                    <div class="dropdown-menu">
                        <input class="form-control" id="doituong" type="text" placeholder="Tìm kiếm">
                        <a class="dropdown-item" href="#">A</a>
                        <a class="dropdown-item" href="#">B</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="ngay">Từ ngày</label>
                <div class="row">
                    <div class="col-md-6">
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="input-group bootstrap-timepicker timepicker">
                            <input id="timefrom" type="text" class="form-control input-small">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                        <script type="text/javascript">
                            $('#timefrom').timepicker();
                        </script>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="ngay">Đến ngày</label>
                <div class="row">
                    <div class="col-md-6">
                        <input type="date"  class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="input-group bootstrap-timepicker timepicker">
                            <input id="timeto" type="text" class="form-control input-small">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $('#timeto').timepicker();
                    </script>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Xem video</button>
            </div>
        </form>
    </div>
</div>
