<?php
    require_once 'connect.php';
    $id = $_GET["id"];
    $sql = "delete from khachhang where id_khachhang = '$id'";
    $strsql = mysqli_query($con,$sql);
    require_once 'disconnect.php';
    header("location:header_admin.php?case=2");
?>