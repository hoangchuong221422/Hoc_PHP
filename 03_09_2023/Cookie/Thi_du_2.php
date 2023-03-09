<?php
    // Hàm lấy dữ liệu cookie
    if(isset($_COOKIE['userName'])){ // dùng hàm này để kt dữ liệu trong cookie còn tồn tại không.
        echo $_COOKIE['userName'];
    }else{
        echo "Không tồn tại";
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>