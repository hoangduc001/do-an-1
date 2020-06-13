<?php
    $id = $_GET["id"];
    session_start();
    unset($_SESSION["gio_hang"][$id]);
    header("location:gio_hang.php");
?>
