<?php
    require_once 'connect.php';
    $ten_sp = $_POST["ten_sp"];
    $gia_sp = $_POST["gia_sp"];
    $mota_sp = $_POST["mota_sp"];
    $anh_sp = $_POST["anh_sp"];
    $id_nhasanxuat = $_POST["id_nhasanxuat"];
    $id_loai_sp = $_POST["id_loai_sp"];
    $id_tinhtrang_sp = $_POST["id_tinhtrang_sp"];
    $sql = "insert into sp (ten_sp,gia_sp,mota_sp,anh_sp,id_nhasanxuat,id_loai_sp,id_tinhtrang_sp) values ('$ten_sp','$gia_sp','$mota_sp','$anh_sp','$id_nhasanxuat','$id_loai_sp','$id_tinhtrang_sp')";
    $strsql = mysqli_query($con,$sql);
    header("location:header_admin.php?case=1");
    require_once 'disconnect.php';
?>