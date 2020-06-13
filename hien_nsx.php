<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><br>
    <?php
        require_once 'connect.php';
        $sql = "select * from nhasanxuat";
        $runsql = mysqli_query($con,$sql);
    ?>
    <table border="1" cellspacing ="0" cellpadding = "0" width = "90%">
        <tr style="color:red">
            <th>id</th>
            <th>NHÀ SẢN XUẤT</th>
            <th colspan="2">action</th>
        </tr>
    <?php
        while($row = mysqli_fetch_array($runsql))
        {
    ?>
        <tr>
            <td><?php echo $row["id_nhasanxuat"]; ?></td>
            <td><?php echo $row["ten_nhasanxuat"]; ?></td>
            <td><a href="sua_nsx.php?id=<?php echo $row['id_nhasanxuat'];?>">sua</a></td>
            <td><a href="xoa_nsx.php?id=<?php echo $row['id_nhasanxuat'];?>">xoa</a></td>
        </tr>
    <?php
        }
    ?>
    </table>
    <?php require_once 'disconnect.php';?>
</body>
</html>