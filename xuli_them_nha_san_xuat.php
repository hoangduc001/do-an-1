<?php
    require_once 'connect.php';
    $ten = $_POST["ten_nhasanxuat"];
    $sql = "insert into nhasanxuat (ten_nhasanxuat) values ('$ten')";
    $runsql = mysqli_query($con,$sql);
    header("location:header_admin.php?case=3");
    require_once 'disconnect.php';
?>