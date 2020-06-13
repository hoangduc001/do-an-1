<?php
    require_once 'connect.php';
    $tai_khoan = $_POST["tai_khoan"];
    $mat_khau = $_POST["mat_khau"];
    $sql = "select * from admin where tai_khoan = '$tai_khoan' and mat_khau = '$mat_khau'";
    $strsql = mysqli_query($con,$sql);
    $dem = mysqli_num_rows($strsql);
    if($dem == 1){
        session_start();
        $row = mysqli_fetch_array($strsql);
        $_SESSION["tai_khoan"] = $row["tai_khoan"];
        $_SESSION["id"] = $row["id"];
        header("location:header_admin.php");
    }
    else{
        header("location:admin.php?loi=Vui lòng đăng nhập lại");
    }
    require_once 'disconnect.php';
?>