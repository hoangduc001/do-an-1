<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    require_once "connect.php";
    $ma_hoa_don = $_GET["id_hoa_don"];   
    $sql = "select 
    hoadonchitiet.*,
    sp.anh_sp,sp.ten_sp
    from hoadonchitiet
    join sp on sp.id_sp = hoadonchitiet.id_sp
    where id_hoa_don = '$ma_hoa_don'";
    $strsql = mysqli_query($con,$sql);
?>
<table border="1" width = "85%" style="margin: auto;margin-top: 10px;text-align: center " cellspacing = "0" cellpadding = "0">
    <tr style="color: red;font-size:20px">
        <th>Sản Phẩm</th>
        <th>Giá</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>
    </tr>
    <?php foreach($strsql as $san_pham){
        $tong_tien = 0;
    ?>
        <tr>
            <td><?php echo $san_pham["ten_sp"]; ?> <br>
                <img src="<?php echo 'anh/'.$san_pham["anh_sp"];?>" width="200px" alt="">
            </td>
            <td><?php $gia = $san_pham["gia"]; 
                if((strlen($gia)-1)%3==0)
                {
                    $socuoi = substr($gia,1);
                    $sodau = substr($gia,0,-(strlen($gia)-1));
                    $socuoi_array = str_split($socuoi,3);
                    $socuoi_dot=join(".",$socuoi_array);
                    echo"". $sodau.".".$socuoi_dot."₫";
                }
                elseif((strlen($gia)-2)%3==0)
                {
                    $socuoi=substr($gia,2);
                    $sodau=substr($gia,0,-(strlen($gia)-2));
                    $socuoi_array=str_split($socuoi,3);
                    $socuoi_dot=join(".",$socuoi_array);
                    echo "". $sodau.".".$socuoi_dot."₫";
                }
                else{
                    $so_array=str_split($gia,3);
                    $so_dot=join(".",$so_array);
                    echo"".$so_dot."₫";
                }
            ?></td>
            <td><?php echo $san_pham["so_luong"]; ?></td>
            <td><?php $gia_sp = $san_pham["gia"] * $san_pham ["so_luong"];
                if((strlen($gia_sp)-1)%3==0)
                {
                    $socuoi = substr($gia_sp,1);
                    $sodau = substr($gia_sp,0,-(strlen($gia_sp)-1));
                    $socuoi_array = str_split($socuoi,3);
                    $socuoi_dot=join(".",$socuoi_array);
                    echo"". $sodau.".".$socuoi_dot."₫";
                }
                elseif((strlen($gia_sp)-2)%3==0)
                {
                    $socuoi=substr($gia_sp,2);
                    $sodau=substr($gia_sp,0,-(strlen($gia_sp)-2));
                    $socuoi_array=str_split($socuoi,3);
                    $socuoi_dot=join(".",$socuoi_array);
                    echo "". $sodau.".".$socuoi_dot."₫";
                }
                else{
                    $so_array=str_split($gia_sp,3);
                    $so_dot=join(".",$so_array);
                    echo"".$so_dot."₫";
                } ?></td>
        </tr>
    <?php
   //$tong_tien += $san_pham[""] * $san_pham["so_luong"];
    }  
    ?>
</table>
</body>
</html>