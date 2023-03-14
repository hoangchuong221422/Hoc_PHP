<?php
    // 1. Kết nối CSDL => port mặc định là 3306: 
    $conn = mysqli_connect("localhost","root","","qlsvc21th2");

    // 2. Xử lý theo tác sửa dữ liệu: 
    $sql = "UPDATE khoa SET TenKH = 'Kế toán doanh nghiệp' where MaKH='KT'";
    if(mysqli_query($conn,$sql)){
        echo "sửa thành công";
    }

    // 3. Đóng kết nối:
    mysqli_close($conn);
?>