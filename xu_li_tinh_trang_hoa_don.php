<?php 
    require_once "connect.php";
    $id = $_GET["id"];
    $tinh_trang = $_GET["tinh_trang"];
    $sql = "update hoadon set tinh_trang = '$tinh_trang' where id_hoa_don = '$id'";
    $strsql = mysqli_query($con,$sql);
    header("location:header_admin.php?case=5");
    require_once "disconnect.php";
?>