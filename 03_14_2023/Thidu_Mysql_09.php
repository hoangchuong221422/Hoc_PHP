<?php
    $conn = mysqli_connect("localhost","root","","qlsv_db");
    $sql = "SELECT sv.MaKH, kh.TenKH, COUNT(sv.MaSV) AS TSSV
            FROM khoa kh INNER JOIN sinhvien sv ON kh.MaKH = sv.MaKH 
            GROUP BY sv.MaKH, kh.TenKH";
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
    <table style="border: 1px solid red;">
        <tr>
            <th>Mã khoa</th>
            <th>Tên khoa</th>
            <th>Tổng số SV</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($kq)){
        ?>
        <tr>
            <td> <?php echo $row['MaKH'] ?> </td>
            <td> <?php echo $row['TenKH'] ?> </td>
            <td> <?php echo $row['TSSV'] ?> </td>
        </tr>

        <?php
            }
            mysqli_close($conn);       
        ?>
    </table>
</body>
</html>