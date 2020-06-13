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
            width: 800px;
            height: 700px;
            border: 1px solid black;
            border-radius: 10px 10px 10px;
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
    <?php
        require_once 'connect.php';
        $id = $_GET["id"];
        $query = "select * from sp where id_sp = '$id'";
        $strquery = mysqli_query($con,$query);                              
        $row = mysqli_fetch_array($strquery);
        require_once 'disconnect.php';
    ?>
    <div class="box-content">
        <h1>Sửa Sản Phẩm:</h1>
        <div class="form">
            <form action="update_san_pham.php" method="post">
                id : <input type="text" name="id_sp" value = "<?php echo $row['id_sp'];?>"><br> 
                tên sp : <input type= "text" name = "ten_sp" value="<?php echo $row['ten_sp'];?>"><br>
                giá sp:   <input type= "number" name = "gia_sp" value="<?php echo $row['gia_sp'];?>"><br>
                mô tả :   <input style="width: 200px" type= "text" name = "mota_sp" value="<?php echo $row['mota_sp'];?>"><br>
                ảnh:   <input type= "text" name = "anh_sp" value="<?php echo $row['anh_sp'];?>"><br>
                nhà sản xuất : <input type="text" name="id_nhasanxuat" value="<?php if($row["id_nhasanxuat"]==1){echo "Brixton";}else{echo "Harley-Davidson";} ?>"> 1:Brixton or Harley-Davidson<br>
                loại sản phẩm : <input type="text" name="id_loai_sp" value="<?php if($row["id_loai_sp"]==1){echo "Xe mô tô";}elseif($row["id_loai_sp"]==2){echo "Xe máy điện";}else{echo"Xe máy tương lai";} ?>" id="">1:xe mô tô or  2:Xe máy điện  or  Xe máy tương lai<br>
                tình trạng : <input type="text" name="id_tinhtrang_sp" value="<?php if($row["id_tinhtrang_sp"]==0){echo "Còn hàng";}else{echo "Hết hàng";} ?>" id="">0:Còn hàng or Hết hàng <br>
                <input type="submit" value="update"style="width: 150px;background-color: red; height: 40px; color:white;border: 1px solid black;font-size: 20px;">
            </form>
        </div>
    </div>
</body>
</html>