<?php
    $ten = isset($_GET["txtten"]) ? $_GET["txtten"] : "";
    $tuoi = isset($_GET["txttuoi"]) ? $_GET["txttuoi"] : "";

    $thongtin = ($ten == "" || $tuoi == "") ? "" : "Họ tên: $ten. Tuổi $tuoi";
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
    <form action="" method="GET">
        Họ tên: <input type="text" name="txtten" value="<?php $ten ?>"> <br/>
        Tuổi: <input type="text" name="txttuoi" value="<?php $tuoi ?>"> <br/>
        <input type="submit" name="btnsubmit" value="Đăng ký">
    </form>
    <h1><?php echo $thongtin?></h1>
</body>
</html>