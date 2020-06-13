<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            margin:auto;
        }
    </style>
</head>
<body>
   <br>
    <?php
        require_once 'connect.php';
        $sql = "select * from admin";
        $strsql = mysqli_query($con,$sql);
    ?>
    <table border="1" cellspacing = "0" cellpadding = "0" width = "80%">
        <tr>
            <th>id</th>
            <th>tài khoản</th>
            <th colspan="2">action</th>
        </tr>
    <?php while($row = mysqli_fetch_array($strsql))
        {
    ?>
        <tr>
            <td><?php echo $row["id"];?></td>
            <td><?php echo $row["tai_khoan"];?></td>
            <td><a href="sua_admin.php?id=<?php echo $row['id'];?>">sua</a></td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>