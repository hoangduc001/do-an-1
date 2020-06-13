<?php
    require_once 'connect.php';
    $taikhoan_khachhang = $_POST["taikhoan_khachhang"];
    $sql = "select * from khachhang where taikhoan_khachhang = '$taikhoan_khachhang'";
    $strsql = mysqli_query($con,$sql);
    $dem = mysqli_num_rows($strsql);
    if($dem > 0){
        require_once 'disconnect.php';
        header("location:dang_ky_khach_hang.php?loi=Tên tài khoản đã có người sử dụng");
    }
    else{
        $ten = $_POST["ten_khachhang"];
        $tuoi = $_POST["tuoi_khachhang"];
        $gioi_tinh = $_POST["gioi_tinh"];
        $dia_chi = $_POST["diachi_khachhang"];
        $sdt = $_POST["sdt_khachhang"];
        $tai_khoan = $_POST["taikhoan_khachhang"];
        $mat_khau = $_POST["matkhau_khachhang"];
        $sql = "insert into khachhang (ten_khachhang,tuoi_khachhang,gioi_tinh,diachi_khachhang,sdt_khachhang,taikhoan_khachhang,matkhau_khachhang) values ('$ten','$tuoi','$gioi_tinh','$dia_chi','$sdt','$tai_khoan','$mat_khau')";
        $strsql = mysqli_query($con,$sql);
        header("location:login_khach_hang.php");
    }
    require_once 'disconnect.php';
?>