<?php
    // Kết nối CSDL => port mặc định là 3306: 
    $conn = mysqli_connect("localhost","root","","qlsvc21th2");

    // xử lý thao tác lấy dữ liệu
    $sql = "SELECT * FROM khoa";
    $kq = mysqli_query($conn,$sql);


    // lấy số dòng dữ liệu đọc được
    // echo mysqli_num_($kq);

    // đọc các dòng dữ liệu
    while($row = mysqli_fetch_assoc($kq)){
        // var_dump($row);
        echo "Mã khoa: " . $row["MaKH"] . "============= Tên khoa" . $row["TenKH"];
    }
    // đóng kết nối
    mysqli_close($conn);       
?>