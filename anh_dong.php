<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       .anh_dong{
            width: 100%;
            height: 15%;
            animation-name:anhdong;
            animation-duration: 10s;
            animation-delay: 0s;
            animation-iteration-count:infinite ;/*vo han*/
        }   
        @keyframes anhdong{
            0% {background-image :url("doan1.jpg");} 
            50% {background-image :url("doan2.jpg");}
            100% {background-image :url("doan3.jpg");}
        }
    </style>
</head>
<body>
    <div class="anh_dong"></div>
</body>
</html>