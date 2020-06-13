<?php 
    session_start();
    if(empty($_SESSION["id_kh"])){
        header("location:login_khach_hang.php");
    }
?>