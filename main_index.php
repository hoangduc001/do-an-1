<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    .main{
        background-color: white;
        width: 100%;
        height: 92%;
    }
    .gioi_thieu{
        width: 100%;
        height: 10%;
    }
    .gioi_thieu_2{
        width: 85%;
        height: 100%;
        margin: auto;
    }
    .gioi_thieu_top{
        width: 100%;
        height: 25%;
        text-align: center;
    }
    .gioi_thieu_bot{
        width: 100%;
        height: 75%;
    }
    .gioi_thieu_bot_left{
        background-color: black;
        width: 40%;
        height: 100%;
        float: left;
    }
    .gioi_thieu_bot_left img{
        margin-top:15%;
        margin-left:5%; 
    }
    .gioi_thieu_bot_right{
        width: 60%;
        height: 100%;
        float: left;
    }
    .gioi_thieu_bot_right_2{
        padding-left:50px; 
        width: 90%;
        height: 87%;
        padding-top: 40px;
    }
    .gioi_thieu_brm{
        font-size: 20px;
        padding-top: 1px;
    }
    .brm{
        font-size: 40px; 
    }
    .san_pham{
        width: 100%;
        height: 67%;
    }
    .san_pham_top{
        width: 100%;
        height: 30%;
    }
    .san_pham_top_2{
        width: 85%;
        height: 100%;
        margin: auto;
    }
    .san_pham_top_2_left{
        width: 33.33%;
        height: 90%;
        float: left;
    }
    .san_pham_top_auto_1{
        width: 100%;
        height: 25%;
    }
    .san_pham_top_auto_1_top{
        border: 1px solid black;
        border-radius:10px 10px 0px 0px; 
        background-color: #4e5763;
        width: 100%;
        height: 45%;
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
        height: 50%;
        text-align: center;
        color: white;
        font-size: 30px;
    }
    .san_pham_top_auto_1_bot p{
        font-size: 40px;
        margin-top: 20px;
    }
    .san_pham_top_auto_2{
        width: 100%;
        height: 50%;
    }
    .san_pham_top_auto_2 img{
        display: block;
        width: 100%;
        height: 100%;
        transition:height 1.5s ,width 1.5s
    }
    .san_pham_top_auto_2 img:hover {
        width: 110%;
        height: 114%;
        transform: rotate(360deg);
        box-shadow: 10px 10px 10px;
    }
    .san_pham_top_auto_3{
        background-color: #dadada;
        width: 100%;
        height: 10%;
        text-align: center;
        color: white;
        position: relative;
        width: 100%;
    }
    .san_pham_top_auto_3 a{
        text-decoration: none;
        color: white;
        font-size: 20px;
    }
    .chitiet{
        background-color:black;
        padding: 10px;
        border: 1px solid black;
        border-radius: 7px;
        margin: auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        transition: all 1s;
    }
    .chitiet a:hover{
        font-size: 25px;
    }
    .for  {
        color: red;
        position: absolute;
        bottom:-3200px;
        right: 120px;
    }
</style>
<?php
    require_once 'connect.php';
    $sql = " select * from sp";
    $strsql = mysqli_query($con,$sql);
    $trang_hien_tai  = 1;
    if(isset($_GET["trang"])){

        $trang_hien_tai = $_GET["trang"];
    }
    $so_san_pham_1_trang = 12;
    $so_luong_tat_ca_san_pham = mysqli_num_rows($strsql);
    $so_trang = ceil( $so_luong_tat_ca_san_pham / $so_san_pham_1_trang );
    $bo_qua = ($trang_hien_tai - 1)*$so_san_pham_1_trang;
    $sql .= " limit $so_san_pham_1_trang offset $bo_qua";
    $strsql = mysqli_query($con,$sql);
?>
<div class="main">
    <?php require_once 'anh_dong.php'; ?>
    <div class="gioi_thieu" id="gioi_thieu">
        <div class="gioi_thieu_2">
            <div class="gioi_thieu_top"><br><br>
                <span class="brm">Brixton Motorcycle đến từ đâu ?</span>
            </div>
            <div class="gioi_thieu_bot">
                <div class="gioi_thieu_bot_left">
                    <img src="cropped-cropped-brixton_logo.png" alt="" width="90%">
                </div>
                <div class="gioi_thieu_bot_right">
                    <div class="gioi_thieu_bot_right_2">
                        <span class="gioi_thieu_brm">.Brixton Motorcycle là thương hiệu xe máy được phân phối bởi tập đoàn KSR (Áo) – doanh nghiệp đang phân phối khá nhiều loại xe cho thị trường châu Âu như Benelli, CFMoto, Generic…<br><br>
                            .Các mẫu xe của Brixton BX được sản xuất tại Trung Quốc và phân phối sang các thị trường khác. Năm 2019 các mẫu xe sẽ được sản xuất và lắp ráp tại Malaysia và được nhập khẩu mới 100% về Việt Nam. Brixton BX có 3 phiên bản khác nhau: BX Classic, BX Scrambler, BX Café Racer. <br> <br>
                            .Chính sách bảo hành : 2 năm hoặc 12.000km.</span>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br>
    <div class="san_pham" id="san_pham">
        <div class="san_pham_top">
            <div class="san_pham_top_2">
               <?php
                    while($row=mysqli_fetch_array($strsql))
                    {
                ?>
                <div class="san_pham_top_2_left">
                    <div class="san_pham_top_auto_1">
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
                    </div>
                       <a href="chi_tiet.php?id=<?php echo $row['id_sp'];?>" title="<?php echo $row['ten_sp'];?>"> <div class="san_pham_top_auto_2"><img src="<?php echo 'anh/'.$row['anh_sp']; ?>" alt=""></div></a>
                        <div class="san_pham_top_auto_3">
                                <a href="chi_tiet.php?id=<?php echo $row['id_sp'];?>"><div class="chitiet">Chi Tiết</a></div>
                        </div>
                </div>
                <?php
                    }
               ?>
                <div align = "right" style="font-size: 40px;padding-bottom: 100px" class="for">
                <?php 
                    for($i = 1; $i <= $so_trang; $i++){
                ?>
                    <a href="?trang=<?php echo $i?>&&#san_pham"><img src="right-arrow.png" alt=""></a>
                <?php 
                    }
                ?>
            </div>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>