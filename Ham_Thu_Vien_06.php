<?php
    // Sử dụng hàm md5 để mã hóa:
    $s1 = "hello";
    $s2 = md5($s1);
    echo $s2;

    // 2. hàm chuyển đổi chữ in, chữ thường     
    $s3 = "computer graphic";
    echo ucwords($s3);

    echo "<br/> ============ <br/>";
    
    // 3. Hàm xóa ký tự đầu và cuối chuỗi
    $s6 = "@@@@@@@@@@@            HocPHP@@@@@@@@@@@@@@@@@@@@@@@@@@@";
    $s7 = ltrim($s6,'@'); // xóa bên trái
    $s8 = rtrim($s6,'@'); // xóa bên phải
    $s9 = trim($s6,'@'); // xóa 2 bên
    echo $s7;
    echo "<br/> ============ <br/>";
    echo $s8;
    echo "<br/> ============ <br/>";
    echo $s9;
?>