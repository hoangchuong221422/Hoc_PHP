<?php
    // 1. Kết nối CSDL => port mặc định là 3306
    $conn = mysqli_connect("localhost","root","","qlsvc21th2");

    $sql = "INSERT INTO khoa VALUES('KT','Kinh tế')";
    if(mysqli_query($conn,$sql)){
        echo "thêm thành công";
    }

    mysqli_close($conn);
?>