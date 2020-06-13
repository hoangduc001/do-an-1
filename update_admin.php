<?php
    require_once 'connect.php';
        $id = $_GET["id"];
        $tai_khoan = $_POST["tai_khoan"];
        $sql = "update admin set tai_khoan = '$tai_khoan' where id = '$id'";
        $strsql = mysqli_query($con,$sql);
        header("location:hien_admin.php");
?>
<?php
    require_once 'disconnect.php';
?>