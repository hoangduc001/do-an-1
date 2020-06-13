<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #primary_nav_wrap
        {
            margin-top:15px
        }
        #primary_nav_wrap ul
        {
            list-style:none;
            position:relative;
            float:left;
            margin:0;
            padding:0
        }
        #primary_nav_wrap ul a
        {
            display:block;
            color:#333;
            text-decoration:none;
            font-weight:700;
            font-size:12px;
            line-height:32px;
            padding:0 15px;
            font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
        }
        #primary_nav_wrap ul li
        {
            position:relative;
            float:left;
            margin:0;
            padding:0
        }
        #primary_nav_wrap ul li.current-menu-item
        {
            background:#ddd
        }
        #primary_nav_wrap ul li:hover
        {
            background:#f6f6f6
        }

        #primary_nav_wrap ul ul
        {
            display:none;
            position:absolute;
            top:100%;
            left:0;
            background:#fff;
            padding:0
        }
        #primary_nav_wrap ul ul li
        {
            float:none;
            width:200px
        }
        #primary_nav_wrap ul ul a
        {
            line-height:120%;
            padding:10px 15px
        }
        #primary_nav_wrap ul ul ul
        {
            top:0;
            left:100%
        }
        #primary_nav_wrap ul li:hover > ul
        {
            display:block
        }
    </style>
</head>
<body>
<?php if(isset($_SESSION["tai_khoan"]))
        {
  ?>
        <h3><?php echo "hello chủ tịch". $_SESSION["tai_khoan"];?></h3>
  <?php
        } 
  ?>
<nav id="primary_nav_wrap">
<ul>
  <li class="current-menu-item"><a href="hien_san_pham.php">Home</a></li>
  <li><a href="">Thông tin admin</a>
    <ul>
      <li><a href="login_admin.php">đăng nhâp</a></li>
        <ul>
          <li><a href="#">Deep Menu 1</a>
            <ul>
              <li><a href="#">Sub Deep 1</a></li>
              <li><a href="#">Sub Deep 2</a></li>
              <li><a href="#">Sub Deep 3</a></li>
                <li><a href="#">Sub Deep 4</a></li>
            </ul>
          </li>
          <li><a href="#">Deep Menu 2</a></li>
        </ul>
      </li>
      <li><a href="admin.php">dang ky</a></li>
    </ul>
  </li>
  <li><a href="#">quản lí nhà sản xuất</a>
    <ul>
      <li class="dir"><a href="them_nha_san_xuat.php">Thêm nhà sản xuất</a></li>
      <li><a href="hien_nha_san_xuat.php">hiện nhà sản xuất</a></li>
    </ul>
  </li>
  <li><a href="#">Menu 4</a></li>
  <li><a href="#">Menu 5</a></li>
  <li><a href="#">menu6</a></li>
  <li><a href="logout_admin.php">đăng xuất</a></li>
</ul>
</nav>
</body>
</html>