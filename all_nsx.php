
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .all1{
            width: 100%;
            height:800px;
        }
        .left{
            width: 30%;
            height: 100%;
            float: left;
        }
        .right{
            width: 70%;
            height: 100%;
            float: right;
            overflow: auto;

        }
    </style>
</head>
<body>
    <div class="all1">
        <div class="left">
            <?php require_once "them_nsx.php"; ?>
        
        </div>
        <div class="right">
        <?php require_once "hien_nsx.php"; ?>
        </div>
    </div> 
</body>
</html>