<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        table,th, td{
            border: solid 1px black;
        }
        table{
             margin-top: 100px;
             margin-left: 100px;
             line-height: 60px;
             width: 600px;
        }
    </style>
</head>
<body>
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif
<a href="{{route('createNhanVien')}}"><button class="btn btn-primary">them</button></a>
    <table >
            <th>STT</th>
            <th>Họ tên</th>
            <th>email</th>
            <th>SĐT</th>
            <th>ngày sinh</th>
            <th>giới tinh</th>
            <th>địa chỉ</th>
            <th>action</th>
        </tr>
        @foreach ($listNhanvien as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->hoten}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->sdt}}</td>
            <td>{{$item->ngaysinh}}</td>
            <td>{{$item->gioitinh}}</td>
            <td>{{$item->diachi}}</td>
            <td>
                <a href="{{route('editNhanVien',['id' =>$item->id])}}"><i class="fa fa-edit " aria-hidden="true"></i></a>
                <a href="{{route('deleteNhanVien',['id' =>$item->id])}}" ><i class="fa fa-trash" aria-hidden ="true"></i> </a>
            </td>
        </tr>
        @endforeach
    </table>
    
</body>
</html>