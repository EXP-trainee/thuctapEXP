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
    </style>
</head>
<body>
    <table >
        <tr>
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
            <td>{{$item->id}}</td>
            <td>{{$item->hoten}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->sdt}}</td>
            <td>{{$item->ngaysinh}}</td>
            <td>{{$item->gioitinh}}</td>
            <td>{{$item->diachi}}</td>
            <td>
                <a href=""><i class="fa fa-edit " aria-hidden="true"></i></a>
                <a href="" ><i class="fa fa-trash" aria-hidden ="true"></i> </a>
            </td>

        @endforeach
    </table>
    
</body>
</html>