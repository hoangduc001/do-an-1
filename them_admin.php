<?php
    require_once 'connect.php';
    $tai_khoan = $_POST["tai_khoan"];
    $mat_khau = $_POST["mat_khau"];
    $sql = "insert into admin (tai_khoan,mat_khau) values ('$tai_khoan','$mat_khau')";
    $strsql = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($strsql);
    header("location:admin.php");
    require_once 'disconnect.php';
?>