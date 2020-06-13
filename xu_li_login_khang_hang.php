<?php
    
    require_once 'connect.php';
    $taikhoan_khachhang = $_POST["taikhoan_khachhang"];
    $matkhau_khachhang = $_POST["matkhau_khachhang"];
    $sql = "select * from khachhang where taikhoan_khachhang = '$taikhoan_khachhang' and matkhau_khachhang = '$matkhau_khachhang' and tinh_trang=1";
    $strsql = mysqli_query($con,$sql);
    $dem = mysqli_num_rows($strsql);
    if($dem == 1){
        session_start();
        $row = mysqli_fetch_array($strsql);
        $_SESSION["id_kh"] = $row["id_khachhang"];
        $_SESSION["taikhoan"] = $row["ten_khachhang"];
        header("location:index.php");
    }
    else{
        header("location:login_khach_hang.php?loi=Vui lòng đăng nhập lại");
    }
    require_once 'disconnect.php';
?>