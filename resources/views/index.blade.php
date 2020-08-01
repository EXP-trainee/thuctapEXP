<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type= "text/javascript">
        function xoahaykhong(tinnhan){
            if(window.confirm(tinnhan)==true){
                return true;
            }
             return false;
        }
    </script>
</head>
<body>
    <h1 style="text-align: center"; >THIS IS ADMIN PAGE</h1>

    <h3> Danh sách nhân viên </h3> 
    <h3> <a href="">Thêm nhân viên</a> </h3>
    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>SĐT</th>
                <th>địa chỉ</th>
                <th>update</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td><a href=""><i class="fa fa-edit " aria-hidden="true"></i></a></td>
                <td> 
                    <a href="" onclick="return xoahaykhong(' ban có muốn xóa hay khong') "; > <i class="fa fa-trash" aria-hidden ="true"></i> </a>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>