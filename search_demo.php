<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .header_top_right_right{
            width: 70%;
            height: 100%;
            float: left;
        }
        .search{
            width: 100%;
            height: 40px;
            padding-top: 50px;
            border: 0,1px solid black;
            border-radius: 20px 20px 20px;
            position: relative;
        }
        .search2{
            width: 80%;
            height: 40%;
            font-size: 20px;
            position: absolute;
            top: 80px;
            left: 50px;                 
        }
        .search3{
            position: absolute;
            height: 35px;
            right: 149px;
            top: 83px;
            width: 72px
        }
    </style>
</head>
<body>
<div class="header_top_right_right">
    <div class="search">
        <form action="search.php" method="get">
            <input  class="search2" type="search" name="tim_kiem" placeholder="  Tìm sản phẩm...">
        </form>
    </div> 
</div>
</body>
</html>