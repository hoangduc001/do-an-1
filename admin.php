<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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
                opacity: 0.8;
                width: 450px;
                height: 600px;
                border: 1px solid black;
                border-radius: 10px 10px 10px;
                text-align: center;
        
            }
            .form{
                padding: 90px;
                color: white;
                font-size: 20px;
                
            }
            input{
                font-size: 20px;
                border: 0,1px  black;
                border-radius: 8px 8px 8px;
                height: 25px;
                margin: 20px;
                outline: none;
            }
            h1{
                color: red;
                text-align: center;
                font-size: 40px
            }
         
        </style>
</head>
<body>
    <div class="all_admin">
        <img src="68735.jpg" style="width: 100%;" alt="">
        <div class="box-content">
        <?php if(isset($_GET["loi"]))
                {
            ?>
                <h1><?php echo $_GET["loi"];?></h1>
            <?php
                } 
            ?>
           <div class="form">
                <h2 style="color:whitesmoke;font-size: 30px">Đăng Nhập Admin:</h2>
                <form action="login_admin.php" method="post">
                    <label for="ten">
                        Tài Khoản:
                        <input type="text" name="tai_khoan" id="ten"><br>
                    </label>
                    <label for="mk">
                        Mật Khẩu:
                        <input type="password" name="mat_khau" id="mk"><br>
                    </label>
                    <input type="submit" value="Đăng Nhập" style="width: 200px;background-color: red; height: 40px; color:white;border: 1px solid black;font-size: 20px;">
                </form>
           </div>
        </div>
    </div>
</body>
</html>
