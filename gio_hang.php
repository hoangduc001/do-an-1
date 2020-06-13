<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giỏ Hàng</title>
    <style>
        table{
            margin: auto;
            margin-top: 20px;
            text-align: center
        }
    </style>
</head>
<body>
    <?php require_once "check_khach_hang.php"; ?>
    <?php require_once "header.php"; ?>
    <?php 
        if(empty($_SESSION["gio_hang"]))
        {
    ?> <br>
        <h2 style="color: red"><?php echo "Chưa có sản phẩm nào trong giỏ.";?><a href="index.php#san_pham">Quay Lại Cửa Hàng.</a></h2>
    <?php
        }else{
    ?>
    <?php
        $arr_gio_hang = $_SESSION["gio_hang"];
        $tong_tien = 0;
    ?>
  <div class="gio_hang_add">
  <table border="1" cellspacing = "0" cellpadding = "0" width = "85%" >
        <tr class="tt" style="font-size: 20px;background-color:darkgray;height: 50px">
            <th>Tên Sản Phẩm</th>
            <th>Ảnh</th>
            <th>Giá Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Thành Tiền</th>
            <th>Action</th>
        </tr>
    <?php foreach($arr_gio_hang as $id_sp => $san_pham)
        {
    ?>
        <tr>
            <td><h3><?php echo $san_pham["ten_sp"];?></h3></td>
            <td><img src="<?php echo 'anh/'.$san_pham['anh_sp'];?>" width="230px" alt=""></td>
            <td>   
                <h3 style="color: tomato"><?php 
                    if((strlen($san_pham['gia_sp'])-1)%3==0)
                    {
                        $socuoi=substr($san_pham['gia_sp'],1);
                        $sodau=substr($san_pham['gia_sp'],0,-(strlen($san_pham['gia_sp'])-1));
                        $socuoi_array=str_split($socuoi,3);
                        $socuoi_dot=join(".",$socuoi_array);
                        echo $sodau.".".$socuoi_dot."₫";
                    }
                    elseif((strlen($san_pham['gia_sp'])-2)%3==0)
                    {
                        $socuoi=substr($san_pham['gia_sp'],2);
                        $sodau=substr($san_pham['gia_sp'],0,-(strlen($san_pham['gia_sp'])-2));
                        $socuoi_array=str_split($socuoi,3);
                        $socuoi_dot=join(".",$socuoi_array);
                        echo $sodau.".".$socuoi_dot."₫";
                    }
                    else{
                        $so_array=str_split($san_pham['gia_sp'],3);
                        $so_dot=join(".",$so_array);
                        echo $so_dot."₫";
                    }
                ?></h3>
            </td>
            <td><a href="tru.php?id=<?php echo $id_sp; ?>"><img src="minus.png" alt=""></a>  <?php echo $san_pham["so_luong"];?>  <a href="plus.php?id=<?php echo $id_sp; ?>"><img src="plus (1).png" alt=""></a></td>
            <td>
                <h3 style="color: tomato">
                    <?php $gia =  $san_pham["gia_sp"] * $san_pham["so_luong"];
                        if((strlen($gia)-1)%3==0)
                        {
                            $socuoi=substr($gia,1);
                            $sodau=substr($gia,0,-(strlen($gia)-1));
                            $socuoi_array=str_split($socuoi,3);
                            $socuoi_dot=join(".",$socuoi_array);
                            echo $sodau.".".$socuoi_dot."₫";
                        }
                        elseif((strlen($gia)-2)%3==0)
                        {
                            $socuoi=substr($gia,2);
                            $sodau=substr($gia,0,-(strlen($gia)-2));
                            $socuoi_array=str_split($socuoi,3);
                            $socuoi_dot=join(".",$socuoi_array);
                            echo $sodau.".".$socuoi_dot."₫";
                        }
                        else{
                            $so_array=str_split($gia,3);
                            $so_dot=join(".",$so_array);
                            echo $so_dot."₫";
                        }
                    ?></td>
            <td><a href="xoa_san_pham_trong_gio_hang.php?id=<?php  echo $id_sp; ?>"><img src="garbage.png" alt=""></a></td>
        </tr>
        <?php $tong_tien += $san_pham["gia_sp"] * $san_pham["so_luong"];?>
    <?php
        }
    ?>
    </table>
    <div align = "right" style="color:red;padding-right:100px;font-size: 25px">
      <h2>
        <?php
            if((strlen($tong_tien)-1)%3==0)
            {
                $socuoi = substr($tong_tien,1);
                $sodau = substr($tong_tien,0,-(strlen($tong_tien)-1));
                $socuoi_array = str_split($socuoi,3);
                $socuoi_dot=join(".",$socuoi_array);
                echo"Tổng Tiền:". $sodau.".".$socuoi_dot."₫";
            }
            elseif((strlen($tong_tien)-2)%3==0)
            {
                $socuoi=substr($tong_tien,2);
                $sodau=substr($tong_tien,0,-(strlen($tong_tien)-2));
                $socuoi_array=str_split($socuoi,3);
                $socuoi_dot=join(".",$socuoi_array);
                echo "Tổng Tiền:". $sodau.".".$socuoi_dot."₫";
            }
            else{
                $so_array=str_split($tong_tien,3);
                $so_dot=join(".",$so_array);
                echo"Tổng Tiền:".$so_dot."₫";
            } ?>       
      </h2> 
      <div>
      <a href="index.php#san_pham" style="background-color:darkgray;color: white;font-size: 22px;padding: 13px;padding-left: 20px;padding-right: 13px;"> <img src="left.png" style="margin-top: 10px" alt=""> Quay lại cửa hàng</a>  <a href="tien_hang_dat_hang.php" style="background-color: black;color: white;font-size: 22px;padding: 13px;padding-left: 25px;padding-right: 26px" title="Đặt Hàng" > Tiến Hành Đặt Hàng</a>
      </div>
    </div>
  </div>
    <?php
        }
    ?>
</body>
</html>
