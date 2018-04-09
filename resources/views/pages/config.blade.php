<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CAMERA - Configuration</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">
                            <h3 class="panel-title">CẤU HÌNH SERVER</h3>
                        </div>
                        <div class="panel-body">
                            Bạn chưa có tài khoản quản trị nào, hãy tạo ngay
                            <form method='POST'>
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Tên</label>
                                    <input type="text" class="form-control" placeholder="Tên" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                                </div>
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </body>
</html>
