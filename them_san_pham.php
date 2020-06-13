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
            height: 700px;
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
    <?php require_once 'connect.php';
            $sql = "select * from nhasanxuat";
            $array_nhasanxuat = mysqli_query ($con, $sql);
            ?>
    <div class="box-content">
                <h1 id="add">Thêm Sản Phẩm:</h1>
        <div class="form">                 
                <form action="xu_li_them_san_pham.php" method="post">
                    Tên sản phẩm:<input type="text" name="ten_sp" required><br>
                    Giá:<input type="number" name="gia_sp"><br>
                    Mô Tả:<textarea name="mota_sp" id="" cols="30" rows="10"></textarea><br>
                    Ảnh :<input type="text" name="anh_sp" required><br>
                    Nhà Sản Xuất :
                    <select >
                    	<?php foreach ($array_nhasanxuat as $nhasanxuat):?>
                        	<option value="<?php echo $nhasanxuat ['ma']?>">
                            	<?php echo $nhasanxuat ['ten_nhasanxuat']?>
                        	</option>
                       	<?php endforeach ?>
                    </select><br>
                    Loại sản phẩm:
                    <select name="id_loai_sp" id="">
                        <option value="1">Xe Mô Tô</option>
                        <option value="2">Xe Máy Điện</option>
                        <option value="3">Xe Tương Lai</option>
                    </select><br>
                    Tình trạng:
                    <input type="radio" name="id_tinhtrang_sp" value="0"checked>Còn Hàng<input type="radio" name="id_tinhtrang_sp" value="1">Hết Hàng <br><br>
                <input type="submit" value="ADD sản phẩm" style="width: 150px;background-color: red; height: 40px; color:white;border: 1px solid black;font-size: 20px;">
            </form>
        </div>
    </div>
</body>
</html>