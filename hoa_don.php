<?php
    require_once "connect.php";
    $sql = "select * from hoadon order by tinh_trang asc,tong_tien desc ,ngay_dat_hang desc";
    $strsql = mysqli_query($con,$sql);
?>
<table border="1" width = "85%" style="margin: auto;margin-top: 10px;text-align: center " cellspacing = "0" cellpadding = "0">
    <tr style="color: red;font-size:20px">
        <th>Thời Gian Đặt Hàng</th>
        <th>Tổng Tiền</th>
        <th>Thông Tin Người Nhận</th>
        <th>Tình Trạng</th>
        <th>Action</th>
        <th>Xem Chi Tiết</th>
    </tr>
    <?php foreach($strsql as $san_pham){
    ?>
        <tr>
            <td><?php echo $san_pham["ngay_dat_hang"]; ?></td>
            <td><?php $tong_tien = $san_pham["tong_tien"];
                if((strlen($tong_tien)-1)%3==0)
                {
                    $socuoi = substr($tong_tien,1);
                    $sodau = substr($tong_tien,0,-(strlen($tong_tien)-1));
                    $socuoi_array = str_split($socuoi,3);
                    $socuoi_dot=join(".",$socuoi_array);
                    echo"". $sodau.".".$socuoi_dot."₫";
                }
                elseif((strlen($tong_tien)-2)%3==0)
                {
                    $socuoi=substr($tong_tien,2);
                    $sodau=substr($tong_tien,0,-(strlen($tong_tien)-2));
                    $socuoi_array=str_split($socuoi,3);
                    $socuoi_dot=join(".",$socuoi_array);
                    echo "". $sodau.".".$socuoi_dot."₫";
                }
                else{
                    $so_array=str_split($tong_tien,3);
                    $so_dot=join(".",$so_array);
                    echo"".$so_dot."₫";
                }
            ?></td>
            <td><?php echo $san_pham["ten_nguoi_nhan"]; ?>
                <br><?php echo $san_pham["sdt_nguoi_nhan"]; ?>
                <br><?php echo $san_pham["dia_chi_nguoi_nhan"]; ?>
            </td>
            <td><?php 
                switch($san_pham["tinh_trang"]){
                    case 1:
                        echo "Đang Chờ Xử Lí";
                    break;
                    case 2:
                        echo "Đã Xử Lí";
                    break;
                    case 3:
                        echo "Đã Hủy";
                    break;
                }
            ?></td>
            <td>
                <?php if($san_pham["tinh_trang"] == 1){
                ?>
                    <a href="xu_li_tinh_trang_hoa_don.php?tinh_trang=2&id=<?php echo $san_pham["id_hoa_don"];?>">
                        <button>
                            Duyệt
                        </button>
                    </a>
                    <a href="xu_li_tinh_trang_hoa_don.php?tinh_trang=3&id=<?php echo $san_pham["id_hoa_don"];?>">
                        <button>
                            Huỷ
                        </button>
                    </a>
                <?php 
                } ?>
            </td>
            <td><a href="?case=6&id_hoa_don=<?php echo $san_pham['id_hoa_don'];?>">Xem Chi Tiết</a></td>
        </tr>
    <?php
    }    
    ?>
</table>
