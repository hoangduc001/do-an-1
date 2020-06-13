<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Ký Khách Hàng</title>
        <style>
        body{
            margin: auto;
            padding: auto;
        }
            .all_admin{
                height: 740px;
                width: 100%;
            }
            .box-content{
                position: absolute;
                top: 60px;
                left: 36%;
                background-color: black;
                width: 450px;
                height: 600px;
                border: 1px solid black;
                border-radius: 10px 10px 10px;
                text-align: center;
                opacity: 0.8;
            }
            .form{
                padding: 30px;
                color: white;
                font-size: 20px;
                
            }
            input{
                font-size: 17px;
                border: 0,1px black;
                border-radius: 8px 8px 8px;
                height: 20px;
                margin: 17px;
                outline: none;
            }
            h1{
                color: red;
                text-align: center;
                font-size: 30px
            }
         
        </style>
</head>
<body>
    <div class="all_admin">
        <img src="68735.jpg" style="width: 100%;" alt="">
        <div class="box-content">
            <?php if(isset($_GET["loi"])){?><h1 style="color: red"><?php echo $_GET["loi"]; ?></h1><?php }?>
            <h2 style="color:white;font-size:30px" >Đăng Ký Khách Hàng:</h2>
                 <div class="form">
                    <form action="xu_li_dang_ky_khach_hang.php" method="post">
                        Tên :
                        <input type="text" name="ten_khachhang" required><br>
                        Tuổi :
                        <input type="number" name="tuoi_khachhang" required><br>
                        Giới Tính :
                        <input type="radio" name="gioi_tinh" value="nu" checked>nu<input type="radio" name="gioi_tinh" value="nam">nam<br>
                        Địa Chỉ :
                        <input type="text" name="diachi_khachhang" required><br>
                        Sđt :
                        <input type="number" name="sdt_khachhang" required><br>
                        Tài Khoản :
                        <input type="text" name="taikhoan_khachhang" required><br>
                        Mật Khẩu :
                        <input type="password" name="matkhau_khachhang" required><br>
                        <input type="submit" value="Đăng Ký" style="width: 150px;background-color: red; height: 40px; color:white;border: 1px solid black;font-size: 20px;">
                    </form>
                </div>
           </div>
        </div>
    </div>
</body>
</html>
