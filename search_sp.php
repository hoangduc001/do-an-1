
<?php 
if(isset($_GET["tim_kiem"]))
    {
    $tim_kiem = $_GET["tim_kiem"];
    }
require_once 'connect.php';
$sql1 = "select * from sp where ten_sp like '%$tim_kiem%' or gia_sp like '%$tim_kiem%'";
$sql = mysqli_query($con,$sql1);
$dem = mysqli_num_rows($sql);
if($dem == 0){
    echo " <h1 style = 'color:tomato'> Không tìm thấy sản phẩm.</h1>";
}
else{
    $so_san_pham_1_trang = 3;
    $so_san_pham = mysqli_num_rows($sql);
    $so_trang = ceil($so_san_pham/$so_san_pham_1_trang);
    $trang = 1;
    if(isset($_GET['trang'])){
        $trang = $_GET['trang'];
    }
    $start = ($trang - 1)*$so_san_pham_1_trang;
    $sql_phan_trang = $sql1 . ' LIMIT ' . $start . ',' .$so_san_pham_1_trang;
    // echo $sql_phan_trang;die;
    $result_phan_trang = mysqli_query($con,$sql_phan_trang);
?>
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
                    <a href="search_sp.php?trang=<?php echo  $i."&tim_kiem=".$tim_kiem;?>"><?php echo $i;?></a>
                <?php
            }
        ?>
    </div>
<?php 

    }
?>

