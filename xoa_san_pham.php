<?php
    require_once 'connect.php';
    $id = $_GET["id"];
    $sql = "delete from sp where id_sp = '$id'";
    $strsql = mysqli_query($con,$sql);
    require_once 'disconnect.php';
    header("location:header_admin.php?case=1");
?>
