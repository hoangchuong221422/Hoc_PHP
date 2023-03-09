<?php
    // Khai báo sử dụng session
    // 1. Nếu chưa có session => PHPSesstionID được tạo vào cookie của trình duyệt
    // 2. Nếu đã có session => truy xuất và làm việc
    session_start();    
    var_dump($_SESSION);
    session_unset();
    var_dump($_SESSION);
    $_SESSION['noiSinh'] = "Ha noi";
    var_dump($_SESSION);
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
<h1>Thí dụ hàm session_unset xóa tất cả phần tử trong SESSION</h1>


</body>
</html>