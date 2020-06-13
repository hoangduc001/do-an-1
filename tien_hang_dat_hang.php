<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đặt Hàng</title>
    <script>
        function thanh_cong(){
            alert("Đặt Hàng Thành Công");
        }
    </script>
    <style>
        #all{
            width: 85%;
            height: 700px;
            margin: auto
        }
        #all_1{
            width: 35%;
            height: 100%;
            float: left;
        }
        #all_3{
            background-color:darkgrey;
            width: 65%;
            height: 100%;
            float: left;
        }
        .all_admin{
                height: 740px;
                width: 100%;
        }
        .box-content{
            background-color: black;
            width: 100%;
            height:95%;
            text-align: center;
    
        }
        .form{
            padding: 10px;
            color: white;
            font-size: 20px;
            
        }
        input{
            font-size: 20px;
            border: 0,1px  black;
            border-radius: 8px 8px 8px;
            height: 30px;
            margin: 20px;
            outline: none;
        }
        h1{
            color: red;
            text-align: center;
            font-size: 40px
        }
        #all_2_1{
            width: 90%;
            height: 100%;
            margin: auto;
        }
        #aa{
            border: 0.1px solid;
            width: 100%;
            height: 150px;
        }
        #a1{
            width: 100%;
            height: 50%;
        }
        #all_3_1{
            height: 100%;
            width: 90%;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <?php
        require "connect.php";
        $id = $_SESSION["id_kh"];
        $sql = "select * from khachhang where id_khachhang = '$id'";
        $strsql = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($strsql);
    ?>
    <div id="all">
        <div id="all_1">
            <div class="all_admin">
            <div class="box-content">
                <div class="form">
                    <h2 style="color:whitesmoke;font-size: 24px">Thông Tin Đặt Hàng:</h2>
                    <form action="xu_li_dat_hang.php" method="get">
                        <label for="ten">
                            Tên Người Nhận:
                            <input type="text" name="ten_nguoi_nhan" id="ten" value="<?php echo $row["ten_khachhang"]; ?>" ><br>
                        </label>
                        <label for="mk">
                            SĐT Người Nhận:
                            <input type="number" name="sdt_nguoi_nhan" id="mk" value="<?php echo $row["sdt_khachhang"]; ?>" ><br>
                        </label>
                        <label for="mk1">
                            Địa Chỉ Người Nhận:
                            <input type="text" name="dia_chi_nguoi_nhan" id="mk" value="<?php echo $row["diachi_khachhang"]; ?>" ><br>
                        </label>
            </div>
            </div>
            </div>
        </div>
        <div id="all_3">
            <div id="all_3_1">
                <h2>Đơn Hàng 
                    <?php   
                        if(empty($_SESSION["gio_hang"])){
                            echo "0"."Sản Phẩm";
                        }
                        else{
                            $so_luong = 0;
                            foreach($_SESSION["gio_hang"] as  $san_pham){
                                $so_luong += $san_pham["so_luong"]; 
                            }
                        }
                    ?>
                    <span>(<?php echo $so_luong."Sản Phẩm";?>)</span>
                </h2>
                <table border="1px" width = "100%" cellspacing = "0" cellpadding = "0">
                <?php 
                    $tong_tien = 0;
                    if(isset($_SESSION["gio_hang"])){
                        foreach($_SESSION["gio_hang"] as $san_pham)
                        {
                    ?>
                      <tr>
                            <td><img src="<?php echo "anh/".$san_pham["anh_sp"]; ?>" style="width: 100px" alt=""></td>
                            <td style="width: 40px;text-align: center"><?php echo $san_pham["so_luong"];?></td>
                            <td style="font-size: 14px"><?php echo $san_pham["ten_sp"];?></td>
                            <td style="font-size: 23px"><?php $gia   = $san_pham["gia_sp"] * $san_pham["so_luong"];
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
                                } ?> </td>
                        </tr>
                        <?php $tong_tien += $san_pham["gia_sp"] * $san_pham["so_luong"];?>
                    <?php    
                        }
                    }
                ?>
                </table>
                <h2 align = "right" style="font-size: 40px"><?php
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
                 <a href="gio_hang.php" style="text-decoration: none;color: black;font-size:30px;padding: 13px;padding-left: 0px;padding-right: 13px;"><img src="turn-left.png" alt="">Quay lại giỏ hàng</a>
                    <input align = "right" type="submit" onclick="thanh_cong()" value="Đặt Hàng" style="width: 261px;background-color: red;height: 50px;color: white;border: 1px solid black;font-size: 31px;margin-left: 199px;margin-top: -36px;">
                </form>
            </div>
        </div>
    </div>
</body>
</html>