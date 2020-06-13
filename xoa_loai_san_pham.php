<?php
    require_once 'connect.php';
    $id = $_GET["id"];
    $sql = "delete from loai_sp where id_loai_sp = '$id'";
    $strsql = mysqli_query($con,$sql);
    header("location:header_admin.php?case=4");
    require_once 'disconnect.php';
?>