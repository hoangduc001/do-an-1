<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <br>
    <?php
        require_once 'connect.php';
        $sql = "select * from khachhang";
        $strsql = mysqli_query($con,$sql);
    ?>
    <table border="1" cellspacing = "0" cellpadding = "0" width = "70%" height = "100px" style="margin-top:10px;margin: auto;">
        <tr style="color: red">
            <th>id</th>
            <th>tên kh</th>
            <th>tuoi</th>
            <th>GT</th>
            <th>địa chỉ</th>
            <th>sdt</th>
            <th>tài khoản</th>
            <th>tinh trang</th>
        </tr>
    <?php while($row = mysqli_fetch_array($strsql))
        {
    ?>
        <tr>
            <td><?php echo $row["id_khachhang"];?></td>
            <td><?php echo $row["ten_khachhang"];?></td>
            <td><?php echo $row["tuoi_khachhang"];?></td>
            <td><?php if(  $row["gioi_tinh"]==0) { echo "nam";}else{ echo 'nu';} ?></td>
            <td><?php echo $row["diachi_khachhang"];?></td>
            <td><?php echo $row["sdt_khachhang"];?></td>
            <td><?php echo $row["taikhoan_khachhang"];?></td>
            <td><a href="<?php 
                    if($row["tinh_trang"]==1)
                        {
                            echo "open.php?taikhoan_khachhang=".$row["taikhoan_khachhang"];
                        }
                    else{
                        echo "close.php?taikhoan_khachhang=".$row["taikhoan_khachhang"];
                    }
                    ?>"><?php 
                        if($row["tinh_trang"]==1)
                            {
                                echo "khoa";
                            }
                        else{
                            echo "mo";
                        }
                    ?></a></td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>