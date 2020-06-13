<?php
    require_once 'connect.php';
        $id = $_POST["id_sp"];
        $ten_sp	= $_POST["ten_sp"];
        $gia_sp	= $_POST["gia_sp"];
        $mota_sp	= $_POST["mota_sp"];
        $anh_sp	= $_POST["anh_sp"];
        $id_nhasanxuat	= $_POST["id_nhasanxuat"];
        $id_loai_sp	= $_POST["id_loai_sp"];
        $id_tinhtrang_sp = $_POST["id_tinhtrang_sp" ];
        $sql = "update sp set ten_sp='$ten_sp',gia_sp = '$gia_sp', mota_sp = '$mota_sp', anh_sp = '$anh_sp', id_nhasanxuat = '$id_nhasanxuat', id_loai_sp = '$id_loai_sp' ,id_tinhtrang_sp = '$id_tinhtrang_sp' where id_sp = '$id'";
        $strsql = mysqli_query($con,$sql);
        header("location:header_admin.php?case=1");
    require_once 'disconnect.php';
?>
