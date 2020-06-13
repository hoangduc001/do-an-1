<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="anh/icon1/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="anh/icon1/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="anh/icon1/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="anh/icon1/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="anh/icon1/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="anh/icon1/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="anh/icon1/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="anh/icon1/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="anh/icon1/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="anh/icon1/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="anh/icon1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="anh/icon1/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="anh/icon1/favicon-16x16.png">
    <link rel="manifest" href="anh/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Document</title>
    <style>
    body{
        padding: 0px;
        margin: 0px;
    }
    .all{
        width:100%;
        height: 4000px;
        font-family: sans-serif;
        margin-top: -11px;
    }
    .header{
        width: 100%;
        height: 5%;
        position: sticky;
        top: 0;
        z-index: 100;
    }
    .header_top{
        width: 100%;
        height: 70%;
    }
    .header_top_left{
        background-color: black;
        width: 30%;
        height: 100%;
        float: left;
    }
    .bieu_tuong{
        padding-left:50px;
        padding-top:10px; 
    }
    .header_top_right{
        background-color:black;
        width: 70%;
        height: 100%;
        float: left;
    }
    .header_top_right_right{
        width: 70%;
        height: 100%;
        float: left;
    }
    .search{
        width: 100%;
        height: 50px;
        padding-top: 50px;
        border: 0,1px solid black;
        border-radius: 20px 20px 20px;
        position: relative;
    }
    .search2{
        width: 80%;
        border: 0,1px solid black;
        border-radius: 20px 20px 20px;
        height: 40%;
        font-size: 25px;
        position: absolute;
        top: 80px;
        left: 50px;  
        outline: none;               
    }
    .search3{
        position: absolute;
        height: 35px;
        right: 149px;
        top: 83px;
        width: 72px
    }
    .header_top_right_left{
        width : 30%;
        height: 100%;
        float: left;
    }
    .header_top_right_left_top{
        width: 100%;
        height: 30%;
    }
    .header_top_right_left_bot{
        width: 100%;
        height: 70%;
    }
    .gio_hang{
        position: absolute;
        background-color: white;
        width: 9%;
        height: 15%;
        top: 79px;
        right: 143px;
        border: 1px solid;
        border-radius: 20px 20px 20px;
        text-align: center;
        padding-top: 10px;
        font-size: 19px;
        transition: all 1.5s;
    }
    .gio_hang i{
        color: black;
    }
    a{
        color: black;
        text-decoration: none;
    }
    .gio_hang a{
        font-size: 19px;
    }
    .gio_hang:hover{
        background-color: red;
    }
    .gio{
        text-decoration: none;
        color: black;
    }
    .header_top_right_left_top_left{
        background-color:black;
        width: 33,33%;
        height: 100%;
        float: left;
    }
    .header_top_right_left_top_mid{
        background-color:black;
        width: 33,33%;
        height: 100%;
        float: left;
    }
    .header_top_right_left_top_right{
        background-color:black;
        width: 33,33%;
        height: 100%;
        float: left;
    }
    .header_top_right_left_top_right2{
        background-color:black;
        width: 70%;
        height: 100%;
        float: left;
    }
    .dang{
        text-decoration: none;
        color: white; 
        padding:30px; 
    }
    .dang:hover{
        color:yellow;
    }
    .dang2{
        text-decoration: none;
        color: white; 
        padding-left:10px; 
    }
    .dang2:hover{
        color:yellow;
    }
    .header_bot{
        border: 1px solid black;
        background-color: white;
        width: 100%;
        height: 25%;
        position: absolute;
    }
    .danhmuc{
        list-style-type: none;
    }
    .danhmuc li{
        float: left;
        padding-left: 150px;
        font-size: 18px;
    }
    .danhmuc a{
        text-decoration: none;
        color: black;
    }
    .list{
        background-color: black;
        width: 0px;
        height: 3px;
        transition: 0.7s;
        margin: auto;
    }
    a:hover .list{
        width: 100%;
        box-shadow: 5px 5px 5px;
    }
    .add1{
        background-color:tomato;
        width: 25px;
        height: 25px;
        position: absolute;
        z-index: 100000000;
        top: 73px;
        right: 138px;
        border: 1px solid black;
        border-radius: 50%;
        color: white;
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="all">
        <div class="header">
        <div class="add1">
        <?php 
            if(empty($_SESSION["gio_hang"])){
                echo 0;
            }
            else{
                $so_luong = 0;
                foreach($_SESSION["gio_hang"] as $id => $san_pham){
                    $so_luong += $san_pham["so_luong"];
                }
                echo $so_luong;
            }
        ?>
    </div>
            <div class="header_top">
                <div class="header_top_left">
                   <a href="index.php"><img src="cropped-cropped-brixton_logo.png" class="bieu_tuong" alt="" height="80%" width = "80%"></a>
                </div>
                <div class="header_top_right">
                  <div class="header_top_right_right">
                        <div class="search">
                            <form action="search.php" method="get">
                                <input  class="search2" type="search" name="tim_kiem" placeholder="  Tìm sản phẩm...">
                            </form>
                        </div> 
                  </div>
                  <div class="header_top_right_left">
                        <div class="header_top_right_left_top">
                            <?php if(empty($_SESSION["id_kh"])) 
                                {
                            ?>
                                <div class="header_top_right_left_top_left">
                                    <br><a href="dang_ky_khach_hang.php" class="dang">Đăng Ký</a>
                                </div>
                                <div class="header_top_right_left_top_mid">
                                    <br><a href="login_khach_hang.php" class="dang">Đăng Nhập</a>
                                </div>
                            <?php
                            }else{
                            ?>
                                <div class="header_top_right_left_top_right2">
                                <?php if(isset($_SESSION["taikhoan"]))
                                {
                                ?>
                                    <a href="thong_tin_khach_hang.php?id_kh=<?php echo $_SESSION["id_kh"];?>"><h2 style="color: blanchedalmond"><?php echo "hello".$_SESSION["taikhoan"]; ?></h2></a>
                                <?php
                                } 
                                ?>
                                </div>
                                <div class="header_top_right_left_top_right">
                                    <br><a href="logout_khach_hang.php" class="dang2">Đăng Xuất</a>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="header_top_right_left_bot">
                            <a href="gio_hang.php"><div class="gio_hang"><i class="fa fa-shopping-cart"></i>Giỏ Hàng</div></a> 
                        </div>
                  </div>
                </div>
            </div>
            <div class="header_bot">
                <ul class="danhmuc">
                    <li><a href="index.php">TRANG CHỦ
                        <div class="list"></div>
                        <a></li>
                    <li><a href="index.php#gioi_thieu">GIỚI THIỆU
                        <div class="list"></div>
                    </a></li>
                    <li><a href="index.php#san_pham">SẢN PHẨM
                        <div class="list"></div>
                    </a></li>
                    <li><a href="index.php#san_pham">HÃNG XE
                        <div class="list"></div>
                    </a></li>
                    <li><a href="https://www.brixton-motorcycles.com/news/" target="_blank">TIN TỨC
                        <div class="list"></div>
                    </a></li>
                    <li><a href="index.php#foter">LIÊN HỆ
                        <div class="list"></div>
                    </a></li>
                </ul>
            </div>
        </div>  
</body>
</html>