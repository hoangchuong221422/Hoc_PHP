<?php
    // Khai báo sử dụng session
    // 1. Nếu chưa có session => PHPSesstionID được tạo vào cookie của trình duyệt
    // 2. Nếu đã có session => truy xuất và làm việc
    session_start();
    if(isset($_SESSION['hoTen'] ) && isset($_SESSION['tuoi'] ) ){
        $hoTen = $_SESSION['hoTen'];
        $tuoi = $_SESSION['tuoi'];
        $kq = "Ho ten: " .$hoTen . "tuoi: " .$tuoi;
    }else {
        $kq = "Khong co du lieu";
    }
    echo "<br/>" 
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
    <h1><?php echo $kq ?></h1>
</body>
</html>