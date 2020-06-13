<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .all1{
            width: 100%;
            height:700px;
        }
        .left{
            width: 30%;
            height: 50%;
            float: left;
        }
        .right{
            width: 70%;
            height: 100%;
            float: left;
            overflow: auto;
        }
        .box-content{
            position: absolute;
            background-color: black;
            opacity: 0.7;
            width: 450px;
            height: 600px;
            border: 1px solid black;
            border-radius: 10px 10px 10px;
            text-align: center;
        
        }
        .form{
            padding: 30px;
            color: white;
            font-size: 20px;
            
        }
        input{
            font-size: 17px;
            border: 0,1px  black;
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
    <div class="all1">
        <div class="left">
               <div class="box-content">
            <?php if(isset($_GET["loi"])){?><h1 style="color: red"><?php echo $_GET["loi"]; ?></h1><?php }?>
            <h2 style="color:red;font-size:30px" >Đăng Ký Khách Hàng:</h2>
                 <div class="form">
                    <form action="xu_li_dang_ky_khach_hang.php" method="post">
                        Tên :
                        <input type="text" name="ten_khachhang" required><br>
                        Tuổi :
                        <input type="number" name="tuoi_khachhang" required><br>
                        Giới Tính :
                        <input type="radio" name="gioi_tinh" value="nam" checked>nam<input type="radio" name="gioi_tinh" value="nu">nu<br>
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
        <div class="right">
            <?php require_once "hien_kh.php"; ?>
        </div>
    </div> 
</body>
</html>