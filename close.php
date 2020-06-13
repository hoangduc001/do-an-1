<?php 
if(isset($_GET['taikhoan_khachhang']))
{
    $tk=$_GET['taikhoan_khachhang'];
    require_once 'connect.php';
    $kq=mysqli_query($con,"update khachhang set tinh_trang=1 where taikhoan_khachhang='$tk'");
    header("location:header_admin.php?case=2");
    require_once 'disconnect.php';
}
?>