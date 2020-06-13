<?php
    require 'connect.php';
        $id = $_GET["id"];
        $ten = $_POST["ten_loai_sp"];
        $sql = "update loai_sp set ten_loai_sp = '$ten' where id_loai_sp = '$id'";
        $runsql = mysqli_query($con,$sql);
        header("location:header_admin.php?case=4");
        require_once 'disconnect.php';

?>
