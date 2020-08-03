<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>them nhan vien</title>
</head>
<body>
    <h1> Đây là form thêm nhân viên</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{route('postNhanVien')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="tensp">Họ tên</label>
                        <input type="text" name="hoten" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                    </div>
            
                    <div class="form-group">
                        <label for="tensp">Email</label>
                        <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted"></small>
                    </div>
            
                    <div class="form-group">
                        <label for="tensp">Số điện thoại</label>
                        <input type="text" name="sdt" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">10 chữ số</small>
                    </div>
            
                    <div class="form-group">
                        <label for="tensp">Ngày sinh </label>
                        <input type="text" name="ngaysinh" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">yyyy/mm/dd</small>
                    </div>
            
                    <div class="form-group">
                        <label for="tensp">Gioi tính</label>
                        <input type="text" name="gioitinh" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">nam/nữ/giới tính khác</small>
                    </div>
            
                    <div class="form-group">
                        <label for="tensp">Địa chỉ</label>
                        <input type="text" name="diachi" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">tỉnh /thành phố</small>
                    </div>
            
                    <button type="submit" class="btn btn-primary">Them</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>