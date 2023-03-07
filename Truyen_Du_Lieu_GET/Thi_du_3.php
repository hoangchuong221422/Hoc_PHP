<?php
$ten = isset($_GET("txtTen")) ? $_GET("txtTen") :"";
$tuoi = isset($_GET("txtTuoi")) ? $_GET("txtTuoi"):"";
$thongTin = (!$ten || !$tuoi) ? "" : "Thông tin của m là: $ten, $tuoi";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý get</title>
</head>
<body>
    <form action="" method="Get">
        <input type="text" name="txtTen" value="<?php $ten ?>">
        <input type="text" name="txtTuoi" value="<?php $tuoi ?>">
        <button>Đăng ký</button>
    </form>
    <div><?php echo $thongTin ?></div>
</body>
</html>