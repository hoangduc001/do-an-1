<?php 
    session_start();
    $id = $_GET["id"];
    if(isset($_SESSION["gio_hang"][$id])){
        if($_SESSION["gio_hang"][$id]["so_luong"] == 1)
        {
            unset($_SESSION["gio_hang"][$id]);
            header("location:gio_hang.php");
        }
        else{
            $_SESSION["gio_hang"][$id]["so_luong"]--;
            header("location:gio_hang.php");
        }
    }
?>