<?php
    require_once 'connect.php';
        $id = $_GET["id"];
        $ten_khachhang	= $_POST["ten_khachhang"];
        $tuoi_khachhang	= $_POST["tuoi_khachhang"];
        $gioi_tinh	= $_POST["gioi_tinh"];
        $diachi_khachhang	= $_POST["diachi_khachhang"];
        $sdt_khachhang	= $_POST["sdt_khachhang"];
        $taikhoan_khachhang	= $_POST["taikhoan_khachhang"];
        $matkhau_khachhang	= $_POST["matkhau_khachhang"];
        $sql = "update khachhang set ten_khachhang='$ten_khachhang',tuoi_khachhang = '$tuoi_khachhang', gioi_tinh = '$gioi_tinh', diachi_khachhang = '$diachi_khachhang', sdt_khachhang = '$sdt_khachhang', taikhoan_khachhang = '$taikhoan_khachhang' ,matkhau_khachhang = '$matkhau_khachhang' where id_khachhang = '$id'";
        $strsql = mysqli_query($con,$sql);
        header("location:thong_tin_khach_hang.php");
?>
<?php
    require_once 'disconnect.php';
?>