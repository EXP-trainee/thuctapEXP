<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('postNhanVien')}}" method="POST">
        
        <label for=""></label>
        <input type="text" name="hoten" placeholder="Hoten">
        
        <label for=""></label>
        <input type="text" name="email" placeholder="email">
        
        <label for=""></label>
        <input type="text" name="sdt" placeholder="so dien thoai">

        <label for=""></label>
        <input type="text" name="ngaysinh" placeholder="ngay sinh">

        <label for=""></label>
        <input type="text" name="gioitinh" placeholder="gioitinh">

        <label for=""></label>
        <input type="text" name="diachi" placeholder="dia chi">

        <button type="submit" class="btn btn-primary">Them</button>
    </form>
</body>
</html>