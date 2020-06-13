<?php 
    require_once "connect.php";
    $id = $_GET["id"];
    $id_kh = $_SESSION["id_kh"];
    $tinh_trang = $_GET["tinh_trang"];
    $sql = "update hoadon set tinh_trang = '$tinh_trang' where id_hoa_don = '$id'";
    $strsql = mysqli_query($con,$sql);
    header("location:thong_tin_khach_hang.php?id_kh='$id_kh'");
    require_once "disconnect.php";
?>