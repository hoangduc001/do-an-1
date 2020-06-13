<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <?php session_start(); ?> 
    <style>
        .container-fuild{
            width: 100%;
            height:500px;
        }
        .container-fuild-2{
            width: 85%;
            height: 500px;
            margin: auto;
        }
        .container{
            width: 50%;
            height: 500px;
            float: left;
        }
        .container_2{
            width: 50%;
            height: 500px;
            float: left;
        }
        .tt_chi_tiet_sp{
            padding-left: 50px;
            width: 80%;
            height: 100%;
        }
        .price{
            color: tomato;
        }
        .tt{
            font-size: 18px;
        }
        .gio-hang{
            background-color:black;
            width: 25%;
            padding:10px;
            margin: auto;
            text-align: center;
            border: 1px solid black;
            border-radius: 20px 20px 20px;
            transition: all 1s;
        }
        i{
            color: white;
            font-size: 20px;
        }
        a{
            text-decoration: none;
        }
        .add{
            color: white;
            font-size: 15px;
        }
        .gio-hang:hover{
            background-color: red;
        }
    </style>
</head>
<body>
    <?php require_once "header.php"; ?>
    <?php
        if(isset($_GET['id']))
        {
            require_once 'connect.php';
            $id=$_GET['id'];
            $kq=mysqli_query($con,"select * from sp where id_sp=$id");
            $row=mysqli_fetch_array($kq);
            require_once 'disconnect.php';
        }
    ?>
    <div class="container-fuild">
        <div class="container-fuild-2">
            <div class="container">
                <div class="anh_sp">
                    <img src="anh/<?php echo $row['anh_sp'];?>" style="width:110%;height:100%"  alt="">
                </div>
            </div>            
            <div class="container_2">
                <div class="tt_chi_tiet_sp">
                    <h3 style="font-size: 25px;border-bottom: 1px solid black"><?php echo $row['ten_sp']; ?></h3>    
                    <div class="price">
                        <h1>
                        <?php 
                            if((strlen($row['gia_sp'])-1)%3==0)
                            {
                                $socuoi=substr($row['gia_sp'],1);
                                $sodau=substr($row['gia_sp'],0,-(strlen($row['gia_sp'])-1));
                                $socuoi_array=str_split($socuoi,3);
                                $socuoi_dot=join(".",$socuoi_array);
                                echo $sodau.".".$socuoi_dot."₫";
                            }
                            elseif((strlen($row['gia_sp'])-2)%3==0)
                            {
                                $socuoi=substr($row['gia_sp'],2);
                                $sodau=substr($row['gia_sp'],0,-(strlen($row['gia_sp'])-2));
                                $socuoi_array=str_split($socuoi,3);
                                $socuoi_dot=join(".",$socuoi_array);
                                echo $sodau.".".$socuoi_dot."₫";
                            }
                            else{
                                $so_array=str_split($row['gia_sp'],3);
                                $so_dot=join(".",$so_array);
                                echo $so_dot."₫";
                            }
                        ?> 
                        </h1>
                    </div>
                    <div class="tt">
                    <div><h4><?php  if($row["id_nhasanxuat"]==1){ echo "Nhà Sản Xuất"."Brixton.";}else{echo "Nhà Sản Xuất:"."Harley-Davidson.";} ?></h4></div>
                    <div><h4><?php  if($row["id_loai_sp"]==1){ echo "Loại Xe:"."Xe mô tô.";}elseif($row["id_loai_sp"]==2){echo "Loại Xe:". "xe máy điện.";}else{echo "Loại Xe:". "xe máy tương lai.";} ?></div></h4>
                    <div><h4><?php if($row["id_tinhtrang_sp"]==0){echo "Tình Trạng:Còn Hàng.";}else{echo "Tình Trạng:Hết Hàng."; } ?> </h4></div>
                    <div><?php echo $row["mota_sp"]; ?></div>
                    </div> <br>
                            <?php if($row["id_tinhtrang_sp"]==0){ ?>
                       <div> 
                           <a href="them_vao_gio_hang.php?id=<?php echo $_GET["id"];?>"><div class="gio-hang"><i class="fa fa-shopping-cart"></i><span class="add">Thêm Vào Giỏ</span></div></a>
                    </div>
                            <?php }else{ ?>
                                <div> 
                           <a onclick="return confirm('sản phẩm tạm hết hàng')" ><div class="gio-hang"><i class="fa fa-shopping-cart"></i><span class="add">Thêm Vào Giỏ</span></div></a>
                    </div>
                            <?php } ?>
                </div>
            </div>
        </div>
    
</body>
</html>