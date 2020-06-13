<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .tt{
            position: sticky;
            top: 0;
            color:red;
        }
    </style>
</head>
<body>
    <?php
        require_once 'connect.php';
        $search = '';
        if(isset($_GET['search']))
        {
            $search = $_GET['search'];
        }
        $sql = "select * from sp WHERE ten_sp LIKE '%$search%'";
        $strsql = mysqli_query($con,$sql);

        $so_san_pham_1_trang = 3;
        $so_san_pham = mysqli_num_rows($strsql);
        $so_trang = ceil($so_san_pham/$so_san_pham_1_trang);
        $trang = 1;
        if(isset($_GET['trang'])){
            $trang = $_GET['trang'];
        }
        $start = ($trang - 1)*$so_san_pham_1_trang;
        $sql_phan_trang = $sql . ' LIMIT ' . $start . ',' .$so_san_pham_1_trang;
        // echo $sql_phan_trang;die;
        $result_phan_trang = mysqli_query($con,$sql_phan_trang);
    ?>
    <div style="text-align: right;color: red">
        <form action="search_sp.php" method="get">
        Search: <input style="height: 30px"  class="search2" type="search" name="tim_kiem" placeholder="  Tìm sản phẩm...">
        </form>
    </div>
    <table border="1" cellspacing = "0" cellpadding = "0">
        <tr class="tt">
            <th>id</th>
            <th>tên sản phẩm</th>
            <th>giá sản phẩm</th>
            <th>mô tả</th>
            <th>ảnh</th>
            <th>nhà sản xuất</th>
            <th>loại sản phẩm</th>
            <th>tình trạng</th>
            <th colspan="2">action</th>
        </tr>
    <?php while($row = mysqli_fetch_array($result_phan_trang))
        {   
    ?>
        <tr>
            <td style="color:red"><?php echo $row["id_sp"];?></td>
            <td><?php echo $row["ten_sp"];?></td>
            <td><?php echo $row["gia_sp"];?></td>
            <td><?php echo $row["mota_sp"];?></td>
            <td> <img src="<?php echo 'anh/'.$row['anh_sp']; ?>" style="width: 250px;height:200px;" alt=""></td>
            <td><?php if($row["id_nhasanxuat"]==1){echo "Brixton";}else{echo "Harley-Davidson";}  ?></td>
            <td><?php if($row["id_loai_sp"]==1){echo "xe mô tô";}elseif($row["id_loai_sp"]==2){echo "xe máy điện";}else{echo"xe máy tương lai";}?></td>
            <td><?php if($row["id_tinhtrang_sp"]==0){echo "còn hàng.";}else{echo "hết hàng.";}  ?></td>
            <td><a href="sua_san_pham.php?id=<?php echo $row['id_sp'];?>"><img src="repair-tools.png" alt=""></a></td>
            <td><a href="xoa_san_pham.php?id=<?php echo $row['id_sp'];?>"><img src="garbage.png" alt=""></a></td>
        </tr>
    <?php
        }
    ?>
    </table>
    <div align = "right" id="phan_trang">
        <?php 
            for($i = 1;$i <= $so_trang;$i++){
                ?>
                     <a href="?case=1&&trang=<?php echo $i?> &search = <?php echo $search?>">
                <?php
            }
        ?>
    </div>
</body>
</html>