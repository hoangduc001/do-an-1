<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    require_once 'connect.php';
    $id = $_GET["id"];
    $query = "select * from admin where id='$id'";
    $strquery = mysqli_query($con,$query);
    $row = mysqli_fetch_array($strquery);
?>
<form action="update_admin.php?id=<?php echo $row['id']; ?>" method="post">
    id : <input type="text" name="id"  required value="<?php echo $row['id']; ?>" id=""><br>
    tài khoản :<input type= "text" name = "tai_khoan" value="<?php echo $row['tai_khoan'];?>"><br>
    <input type="submit" value="update">
</form>
</body>
</html>