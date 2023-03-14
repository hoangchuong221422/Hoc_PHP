<?php
    // 1. Kết nối CSDL => port mặc định là 3306: 
    $conn = mysqli_connect("localhost","root","","qlsvc21th2");

    // 2. Xử lý theo tác XÓA dữ liệu: 
    $sql = "DELETE FROM khoa where MaKH='KT'";
    if(mysqli_query($conn,$sql)){
        echo "xóa thành công";
    }

    // 3. Đóng kết nối:
    mysqli_close($conn);
    
?>