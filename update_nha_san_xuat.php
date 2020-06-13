<?php
    require 'connect.php';
        $id = $_GET["id"];
        $ten = $_POST["ten_nhasanxuat"];
        $sql = "update nhasanxuat set ten_nhasanxuat = '$ten' where id_nhasanxuat = '$id'";
        $runsql = mysqli_query($con,$sql);
        require_once 'disconnect.php';
        header("location:header_admin.php?case=3");
?>
