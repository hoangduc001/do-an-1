<?php 
    session_start();
    $id = $_GET["id"];
    if(isset($_SESSION["gio_hang"][$id])){
        $_SESSION["gio_hang"][$id]["so_luong"]++;+
        header("location:gio_hang.php");
    }
?>