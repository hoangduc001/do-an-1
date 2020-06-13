    <?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin</title>
    <style>
            body{
                padding: 0px;
                margin: 0px;
            }
            .all{
                width:100%;
                height: 900px;
                font-family: sans-serif;
                margin-top: -11px;
            }
            .header{
                width: 100%;
                height: 20%;
                position: sticky;
                top: 0;
                z-index: 100;
            }
            .header_top{
                width: 100%;
                height: 80%;
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
            .header_top_right_left{
                width : 30%;
                height: 100%;
                float: left;
            }
            .dang{
                text-decoration: none;
                color: white; 
                padding:30px; 
            }
            .header_bot{
                border: 1px solid black;
                background-color: white;
                width: 100%;
                height: 30%;
                position: absolute;
            }
            .danhmuc{
                list-style-type: none;
            }
            .danhmuc li{
                float: left;
                padding-left: 150px;
                font-size: 17px;
            }
            .danhmuc a{
                text-decoration: none;
                color: black;
            }
            .list{
                background-color: black;
                width: 0px;
                height: 3px;
                transition: 0.8s;
                margin: auto;
            }
            a:hover .list{
                width: 100%;
                box-shadow: 5px 5px 5px;
            }
            .admin1{
                margin-top:25px;
                color: white;
            }
            .admin2{
                position: absolute;
                z-index: -100;
                filter:brightness(10%);
            }
            .admin a{
                color: red;
            }
        </style>
        <?php 
            if(empty($_SESSION["id"]))
            {
        ?>
        <?php require_once "admin.php"; ?>
        <?php
            }
            else
            {
        ?> 
            <div class="all">
            <div class="header">
                <div class="header_top">
                    <div class="header_top_left">
                    </div>
                    <div class="header_top_right">
                    <div class="header_top_right_right">
                        <a href="index.php"><img src="cropped-cropped-brixton_logo.png" class="bieu_tuong" alt="" height="90%" width = "70%"></a>
                    </div>
                    <div class="header_top_right_left">
                            <?php if(isset($_SESSION["tai_khoan"]))
                                {
                            ?>
                                <h1 style="color:blanchedalmond;"><?php echo "hello".$_SESSION["tai_khoan"]; ?></h1>
                            <?php
                                }
                            ?>
                    </div>
                    </div>
                </div>
                <div class="header_bot">
                    <ul class="danhmuc">
                        <li>
                            <a href="?case=1">SẢN PHẨM
                                <div class="list"></div>
                            </a>
                        </li>
                        <li><a href="?case=2">KHÁCH HÀNG
                            <div class="list"></div>
                                </a></li>
                        <li><a href="?case=3">NHÀ SXUẤT
                                <div class="list"></div>
                            </a></li>
                        <li><a href="?case=4">LOẠI SPHẨM
                                <div class="list"></div>
                            </a></li>
                        <li><a href="?case=5">ĐƠN HÀNG
                                <div class="list"></div>
                            <a></li>
                        <li><a href="logout_admin.php">OUT
                                <div class="list"></div>
                            </a></li>
                    </ul>
                </div>
        </div>
        <div class="admin1">
            <div class="admin2"><img src="hinh-anh-sieu-xe-ducati-dep-5.jpg" width="100%" height="100%" alt=""> </div>
            <div class="admin">
            <?php if(isset($_GET['case'])){
                        $case_link = $_GET['case'];
                        switch($case_link){
                            case 1:
                                require_once "all_san_pham.php";
                            break;
                            case 2:
                                require_once "hien_kh.php";
                            break;
                            case 3:
                            require_once "all_nsx.php";
                            break;
                            case 4:
                                require_once "hien_loai_san_pham.php";
                            break;
                            case 5:
                                require_once "hoa_don.php";
                            break;
                            case 6:
                                require_once "chi_tiet_hoa_don.php";
                            break;
                        }
                    } 
                    if(isset($_GET["search"])){
                        require_once "search_sp.php";
                    }
                ?>
            </div>
        </div>
    </div>
        <?php 
            }
        ?>
    </body>
    </html>
        




