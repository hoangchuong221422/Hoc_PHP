<?php
    $conn = mysqli_connect("localhost","root","","qlsvc21th2");
    $sql = "SELECT * FROM khoa";
    $kq = mysqli_query($conn,$sql);
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
    <h1>DANH SÁCH MỚI</h1>
    <ul>
        <?php
        while($row = mysqli_fetch_assoc($kq)){           

        ?>
        <li><?php echo $row['TenKH']?></li>
        <?php
            }
            mysqli_close($conn);       

        ?>
    </ul>
</body>
</html>