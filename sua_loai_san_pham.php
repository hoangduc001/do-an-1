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
        $sql = "select * from loai_sp where id_loai_sp ='$id'";
        $strsql = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($strsql);
    ?>
    <form action="update_loai_san_pham.php?id=<?php echo $row["id_loai_sp"];?>"method="post">
        Tên sản phẩm:
        <input type="text" name="ten_loai_sp" value="<?php echo $row["ten_loai_sp"];?>">
        <input type="submit" value="update" style="width: 100px; height: 30px; color: blueviolet;border: 1px solid black;font-size: 20px;">
    </form>
</body>
</html>