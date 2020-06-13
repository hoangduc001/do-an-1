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
        $id = $_GET["id"];
        $sql = "select * from nhasanxuat where id_nhasanxuat ='$id'";
        $runsql = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($runsql);
    ?>
    <form action="update_nha_san_xuat.php?id=<?php echo $row["id_nhasanxuat"]; ?>" method = "post">
        sua ten nha san xuat <br>
        <input type="text" name = "ten_nhasanxuat" value = "<?php echo $row["ten_nhasanxuat"]; ?>"><br>
        <input type="submit" value = "update">
    </form>
</body>
</html>