<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       .box-content{
            position: absolute;
            background-color: black;
            width: 450px;
            height: 590px;
            border: 1px solid black;
            border-radius: 10px 10px 10px;
            text-align: center;
            margin: auto;
        }
        .form{
            padding: -10px;
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
<div class="admin2" style="position: absolute;z-index: -100;filter:brightness(15%);"><img src="hinh-anh-sieu-xe-ducati-dep-5.jpg" width="100%" height="100%" alt=""> </div>
<?php
    require_once "header.php";
    require_once 'connect.php';
    $id = $_GET["id"];
    $query = "select * from khachhang where id_khachhang='$id'";
    $strquery = mysqli_query($con,$query);
    $row = mysqli_fetch_array($strquery);
?>
<div class="box-content">
                <h1> Sửa Khách Hàng:</h1>
        <div class="form">                 
            <form action="update_kh.php?id=<?php echo $row["id_khachhang"]; ?>" method="post">
                tên :   <input type= "text" name = "ten_khachhang" value="<?php echo $row['ten_khachhang'];?>"><br>
                tuổi:   <input type= "number" name = "tuoi_khachhang" value="<?php echo $row['tuoi_khachhang'];?>"><br>
                gt :   <input type= "radio" name = "gioi_tinh" value="1"<?php if($row["gioi_tinh"]==1){echo 'checked';} ?>>nam<input type= "radio" name = "gioi_tinh" value="0"<?php if($row["gioi_tinh"]==0){echo 'checked';} ?> >nu<br>
                địa chỉ:   <input type= "text" name = "diachi_khachhang" value="<?php echo $row['diachi_khachhang'];?>"><br>
                sdt : <input type="text" name="sdt_khachhang" value="<?php echo $row['sdt_khachhang']; ?>" id=""><br>
                taikhoan : <input type="text" name="taikhoan_khachhang" value="<?php echo $row['taikhoan_khachhang']; ?>" id=""><br>
                matkhau : <input type="text" name="matkhau_khachhang" value="<?php echo $row['matkhau_khachhang']; ?>" id=""><br>
                <input type="submit" value="update"style="width: 150px;background-color: red; height: 40px; color:white;border: 1px solid black;font-size: 20px;">
            </form>
        </div>
    </div>
</body>
</html>