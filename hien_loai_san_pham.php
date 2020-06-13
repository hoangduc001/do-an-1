<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'connect.php';
        $sql = "select * from loai_sp";
        $strsql = mysqli_query($con,$sql);
    ?>
    <table border="1" cellspacing = "0" cellspadding = "0" height = 100px width = 90% style="margin: auto">
        <tr style="color:red">
            <th>ID SẢN PHẨM</th>
            <th>TÊN SẢN PHẨM</th>
            <th colspan="2">ACTION</th>
        </tr>
    <?php 
        while($row = mysqli_fetch_array($strsql))
        {
    ?>
        <tr>
            <td><?php echo $row["id_loai_sp"]; ?></td>
            <td><?php echo $row["ten_loai_sp"]; ?></td>
            <td><a href="sua_loai_san_pham.php?id=<?php echo $row["id_loai_sp"];?>">Sửa</a></td>
            <td><a href="xoa_loai_san_pham.php?id=<?php echo $row["id_loai_sp"];?>">Xóa</a></td>
        </tr>
    <?php
        }
    ?>
    </table>
    <?php require_once 'disconnect.php';?>
</body>
</html>