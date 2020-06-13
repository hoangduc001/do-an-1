<?php 
    require_once "check_khach_hang.php";
    $ten_nguoi_nhan = $_GET["ten_nguoi_nhan"];
    $sdt_nguoi_nhan = $_GET["sdt_nguoi_nhan"];
    $dia_chi_nguoi_nhan = $_GET["dia_chi_nguoi_nhan"];
    $arr_gio_hang = $_SESSION["gio_hang"];
    $tong_tien = 0 ;
    foreach($arr_gio_hang as $san_pham){
        $tong_tien += $san_pham["gia_sp"] * $san_pham["so_luong"];
        if((strlen($tong_tien)-1)%3==0)
        {
            $socuoi=substr($tong_tien,1);
            $sodau=substr($tong_tien,0,-(strlen($tong_tien)-1));
            $socuoi_array=str_split($socuoi,3);
            $socuoi_dot=join(".",$socuoi_array);
            echo $sodau.".".$socuoi_dot."₫";
        }
        elseif((strlen($tong_tien)-2)%3==0)
        {
            $socuoi=substr($tong_tien,2);
            $sodau=substr($tong_tien,0,-(strlen($tong_tien)-2));
            $socuoi_array=str_split($socuoi,3);
            $socuoi_dot=join(".",$socuoi_array);
            echo $sodau.".".$socuoi_dot."₫";
        }
        else{
            $so_array=str_split($tong_tien,3);
            $so_dot=join(".",$so_array);
            echo $so_dot."₫";
        }
    }
    require_once "connect.php";
    $id_khach_hang = $_SESSION["id_kh"];
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $ngay_dat_hang = date("Y/m/d H:i:sa");
    $tinh_trang = 1 ; //chua xu li
    $sql = "insert into hoadon (id_khach_hang,ngay_dat_hang,tinh_trang,tong_tien,ten_nguoi_nhan,sdt_nguoi_nhan,dia_chi_nguoi_nhan)
        values 
        ('$id_khach_hang','$ngay_dat_hang','$tinh_trang','$tong_tien','$ten_nguoi_nhan','$sdt_nguoi_nhan','$dia_chi_nguoi_nhan')";
         $strsql = mysqli_query($con,$sql);
    $sql = "select max(id_hoa_don) from hoadon";
    $strsql = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($strsql);
    $max_id_hoa_don = $row["max(id_hoa_don)"];
   // print_r($arr_gio_hang);die;
    foreach($arr_gio_hang as $id_san_pham => $san_pham){
        $so_luong = $san_pham["so_luong"];
        $gia = $san_pham["gia_sp"];
        $sql = "insert into hoadonchitiet (id_hoa_don,id_sp,gia,so_luong) values ('$max_id_hoa_don','$id_san_pham','$gia','$so_luong')";
        $strsql = mysqli_query($con,$sql);
    }
    require_once "disconnect.php";
    unset($_SESSION["gio_hang"]);
    header("location:index.php");   

?>
