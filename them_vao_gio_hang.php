<?php require_once "check_khach_hang.php"; ?>
<?php 
    require_once "connect.php";
    $sql1 = "select * from sp where id_tinhtrang_sp == 1";
    $runsql1 = mysqli_query($con,$sql1);
    $dem = mysqli_fetch_array($runsql1);
    if($dem ==1){
        require_once "disconnect.php";
        require_once "index.php#san_pham?loi='sản phậm hiện tại hết hàng'";
    }
    else{
        
    }
?>
<?php 
    $id = $_GET["id"];
    // kiểm tra giỏ hàng
    if(isset($_SESSION["gio_hang"])){

        // kiểm tra xem có sản phẩm tồn tại trong giỏ không
        
        if(isset($_SESSION["gio_hang"][$id])){
            $_SESSION["gio_hang"][$id]["so_luong"]++;
        }
        //nếu không có thì kết nối csdl,lấy thông tin sản phẩm và lưu lại trong giỏ hàng

        else{
            require_once "connect.php";
            $sql = "select * from sp where id_sp = $id";
            $strsql = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($strsql);
            
            $_SESSION["gio_hang"][$id]["so_luong"]  =  1;
            $_SESSION["gio_hang"][$id]["gia_sp"]    =  $row["gia_sp"];
            $_SESSION["gio_hang"][$id]["ten_sp"]    =  $row["ten_sp"];
            $_SESSION["gio_hang"][$id]["anh_sp"]    =  $row["anh_sp"];
        }
    }else{
        // nếu không có giỏ hàng thì kết nối dữ liệu, lấy thông tin sản phẩm và lưu lại trong giỏ hàng
        require_once "connect.php";
        $sql = "select * from sp where id_sp = $id";
        $strsql = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($strsql);

        $_SESSION["gio_hang"][$id]["so_luong"]  =  1;
        $_SESSION["gio_hang"][$id]["gia_sp"]    =  $row["gia_sp"];
        $_SESSION["gio_hang"][$id]["ten_sp"]    =  $row["ten_sp"];
        $_SESSION["gio_hang"][$id]["anh_sp"]    =  $row["anh_sp"];
    }
    header("location:gio_hang.php");
?>