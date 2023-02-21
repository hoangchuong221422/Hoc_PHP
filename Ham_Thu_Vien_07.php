<?php
    // Các hàm thư viện và mảng trong php
    $arr = ["HTML","CSS","JS","PHP","JAVA"];
    // 1. Hàm đêm số lượng phần tử của mảng.
    echo count($arr);

    // 2. Hàm thêm phần tử vào mảng
    echo "<br/> ============ <br/>";
    array_push($arr,"RUBY"); // thêm vào cuối mảng
    var_dump($arr);
    echo "<br/> ============ <br/>";
    array_unshift($arr,"RUBY"); // thêm vào đầu mảng
    var_dump($arr);
    // 2.2 Hàm xóa phần tử trong mảng:
    echo "<br/> ============ <br/>";
    array_pop($arr); // xóa cuối mảng
    var_dump($arr);
    echo "<br/> ============ <br/>";
    array_shift($arr); // xóa đầu mảng
    var_dump($arr);

    // 3. Hàm trích mảng con trong mảng cha
    echo "<br/> ============ <br/>";
    $subarr = array_slice($arr,1,3,true);
    var_dump($subarr);

    echo "<br/> ============ <br/>";
    $arr1 = ["LC" => "Hello", "TB" => "GoodBye", "LT" => "Lập trình", "DW" => "Thiết kết", "GP" => "Đồ họa"];
    $subarr1 = array_slice($arr1,1,2,2);
    var_dump($subarr1);
?>