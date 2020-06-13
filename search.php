<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .san_pham{
            width: 100%;
            height: 700px;
        }
        .san_pham_1{
            width: 85%;
            height: 700px;
            margin: auto;
        }
        .san_pham_2{
            width: 33.33%;
            height: 650px;
            float: left;
        }
        .san_pham_top_auto_2{
        width: 100%;
        height: 50%;
        }
        .san_pham_top_auto_2 img{
            display: block;
            width: 100%;
            height: 100%;
            transition: height 1.5s ,width 1.5s
        }
        .san_pham_top_auto_2 img:hover {
            width: 500%;
            height: 120%;   
            transform: rotate(360deg);
            box-shadow: 20px 20px 20px;
        }
        .san_pham_top_auto_1_top{
            border: 1px solid black;
            border-radius:10px 10px 0px 0px; 
            background-color: #4e5763;
            width: 100%;
            height: 11%;
            text-align: center;
            color: white;
            font-size: 25px;
        }
        .san_pham_top_auto_1_top p{
            margin-top: 15px;
        }
        .san_pham_top_auto_1_bot{
            border: 1px solid black;
            background-color: #677382;
            width: 100%;
            height: 11%;
            text-align: center;
            color: white;
            font-size: 30px;
        }
        .san_pham_top_auto_1_bot p{
            font-size: 40px;
            margin-top: 12px;
        }
        .san_pham_top_auto_3{
            background-color: #dadada;
            width: 100%;
            height: 6%;
            text-align: center;
            padding: 13px;
        }
        .san_pham_top_auto_3 a{
            text-decoration: none;
            color: white;
            font-size: 21px;
        }
        .chitiet{
            background-color:black;
            border: 1px solid black;
            border-radius: 10px;
            width:80px;
            padding: 8px;
            margin: auto;
        }
        .chitiet:hover{
            width: 90px;
            padding: 10px
        }
    </style>
</head>
<body>
<?php require "header.php";?>
    <div class="san_pham"><br>
        <div class="san_pham_1">
            <?php if(isset($_GET["tim_kiem"]))
            {
                $tim_kiem = $_GET["tim_kiem"];
            }
                require_once 'connect.php';
                $sql = mysqli_query($con,"select * from sp where ten_sp like '%$tim_kiem%' or gia_sp like '%$tim_kiem%'");
                $dem = mysqli_num_rows($sql);
                if($dem == 0){
                    echo " <h1 style = 'color:tomato'> Không tìm thấy sản phẩm.</h1>";
                }
                else{
                    while($row = mysqli_fetch_array($sql))
                {
            ?>
                <div class="san_pham_2">
                    <div class="san_pham_top_auto_1_top"><p><?php echo $row['ten_sp'];?></p></div>
                    <div class="san_pham_top_auto_1_bot">
                        <p><?php  
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
                            }?>
                                </p></div>
                            <div class="san_pham_top_auto_2"><a href="chi_tiet.php?id=<?php echo $row['id_sp'];?>"><img style="height: 330px;width:100%" src="<?php echo 'anh/'.$row['anh_sp']; ?>" alt=""></a></div>
                            <div class="san_pham_top_auto_3" id="chi_tiet">
                               <a href="chi_tiet.php?id=<?php echo $row['id_sp']; ?>"><div class="chitiet">Chi Tiết</div></a>
                        </div>
                    </div>
                <?php
                        }
                    }
                ?>
                
        </div>
    </div>
</body>
</html>