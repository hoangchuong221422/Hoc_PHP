<?php
       $conn = mysqli_connect("localhost","root","","qlsvc21th2");
       $sql = "SELECT * FROM sinhvien WHERE='"+$_GET["txtmakh"]+"'";
       $kq = mysqli_query($conn,$sql);
?>
<table></table>
    <tr>
        <th>Mã Viên</th>
        <th>Họ</th>
        <th>Tên</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($kq)){
        ?>
        <tr>
            <td> <?php echo $row['MaSV'] ?> </td>
            <td> <?php echo $row['HoSV'] ?> </td>
            <td> <?php echo $row['TenSV'] ?> </td>
        </tr>

        <?php
            }
            mysqli_close($conn);       
        ?>
</table>