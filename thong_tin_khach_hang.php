<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="admin2" style="position: absolute;z-index: -100;filter:brightness(15%);"><img src="hinh-anh-sieu-xe-ducati-dep-5.jpg" width="100%" height="100%" alt=""> </div>
<?php 
    require_once "connect.php";
    require_once "header.php";
    $ma_user=$_SESSION["id_kh"];
    $kq=mysqli_query($con,"select * from khachhang where id_khachhang = $ma_user");
?>
    <h1 style="text-align: center;color:red"> Thông Tin Khách Hàng:</h1>
      <table border="1" cellspacing = "0" cellpadding = "0" width = "70%" height = "100px" style="margin-top:10px;margin: auto;">
        <tr style="color:blueviolet;text-align: center" >
            <td>tên kh</td>
            <td>tuoi</td>
            <td>GT</td>
            <td>địa chỉ	</td>
            <td>sdt</td>
            <td>tài khoản</td>
            <td> action</td>
        </tr>
        <?php while($row = mysqli_fetch_array($kq))
            {
        ?>
        <tr style="color:white;text-align: center">
            <td><?php echo $row["ten_khachhang"];?></td>
            <td><?php echo $row["tuoi_khachhang"];?></td>
            <td><?php if(  $row["gioi_tinh"]==0) { echo "nu";}else{ echo 'nam';} ?></td>
            <td><?php echo $row["diachi_khachhang"];?></td>
            <td><?php echo $row["sdt_khachhang"];?></td>
            <td><?php echo $row["taikhoan_khachhang"];?></td>
            <td><a href="sua_kh.php?id=<?php echo $row['id_khachhang'];?>"><img src="repair-tools.png" alt=""></a></td>
        </tr>
        <?php
            }
        ?>
    </table>
    <h1 style="text-align: center;color:red">Xem hoa don:</h1>
 <?php
    if(isset($_GET["id_hoa_don"])){
        require_once "thong_tin_khach_hang.php";
    }
    if(isset($_GET["id_kh"])){
        $id = $_GET["id_kh"];
    }
    else{
        $id = "";
    }
    require_once "connect.php";
    $sql = "select * from hoadon where id_khach_hang = '$id'";
    $strsql = mysqli_query($con,$sql);
?>
<table border="1" width = "85%" style="margin: auto;margin-top: 10px;text-align: center " cellspacing = "0" cellpadding = "0">
    <tr style="color:blueviolet;text-align: center">
        <th>Thời Gian Đặt Hàng</th>
        <th>Tổng Tiền</th>
        <th>Thông Tin Người Nhận</th>
        <th>Tình Trạng</th>
        <th>Action</th>
    </tr> 
    <?php foreach($strsql as $san_pham){
    ?>
        <tr style="color: white">
            <td><?php echo $san_pham["ngay_dat_hang"]; ?></td>
            <td><?php $tong_tien = $san_pham["tong_tien"];
                if((strlen($tong_tien)-1)%3==0)
                {
                    $socuoi = substr($tong_tien,1);
                    $sodau = substr($tong_tien,0,-(strlen($tong_tien)-1));
                    $socuoi_array = str_split($socuoi,3);
                    $socuoi_dot=join(".",$socuoi_array);
                    echo"". $sodau.".".$socuoi_dot."₫";
                }
                elseif((strlen($tong_tien)-2)%3==0)
                {
                    $socuoi=substr($tong_tien,2);
                    $sodau=substr($tong_tien,0,-(strlen($tong_tien)-2));
                    $socuoi_array=str_split($socuoi,3);
                    $socuoi_dot=join(".",$socuoi_array);
                    echo "". $sodau.".".$socuoi_dot."₫";
                }
                else{
                    $so_array=str_split($tong_tien,3);
                    $so_dot=join(".",$so_array);
                    echo"".$so_dot."₫";
                }
            ?></td>
            <td><?php echo $san_pham["ten_nguoi_nhan"]; ?>
                <br><?php echo $san_pham["sdt_nguoi_nhan"]; ?>
                <br><?php echo $san_pham["dia_chi_nguoi_nhan"]; ?>
            </td>
            <td><?php 
                switch($san_pham["tinh_trang"]){
                    case 1:
                        echo "Đang Chờ Xử Lí";
                    break;
                    case 2:
                        echo "Đang Giao Hàng";
                    break;
                    case 3:
                        echo "Đã Hủy";
                    break;
                }
            ?></td>
            <td>
                <a  style="color: white" href="chi_tiet_hoa_don_khach_hang.php?id_hoa_don=<?php echo $san_pham['id_hoa_don'];?>">Xem Chi Tiết</a>
                <div class="ok">
                    
                </div>
            </td>
        </tr>
    <?php
    }    
    ?>
</table>             
</body>
</html>
