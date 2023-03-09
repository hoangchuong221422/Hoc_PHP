<?php
    // 1. Timestamp là tổng số giây tính từ 0:0:0 ngày 1/1/1970 đến thời điểm đó:
    // 2. Hàm time() trả về tổng số giây từ mốc thời gian tới thời điểm hiện tại
    // 3. Thiết lập múi giờ => đặt ở đầu chương trình

    date_default_timezone_set("Asia/Ho_Chi_Minh");
    echo "Tổng số giây tính từ nóc thời gian đến thời điểm hiện tại: "     . time()."<br/>";
    echo "========= Chuyển đổi tổng số giây ra chuỗi ngày tháng tương ứng ==========" . "<br/>";
    echo "Tổng số giây " . time() . "tương ứng với giây " . date("d/m/Y H:i:s",864000) . "<br/>";

    // 4. Sử dụng hàm strtotime => chuyển một chuổi ngày tháng sang dang timestamp ( tổng sô giây)
    //  => Lưu ý: Chuỗi ngày tháng chuyền vào đó có dạng Y-n-d H-i-s tương ứng với SQL Sever
    echo "Ngày 11/1/1970 tương ứng với số giây là: " . strtotime("1970-01-11 00:00:00") . "<br/>";

    // => có tổng số giây chuyển thành ngày tháng => date; có chuỗi ngày tháng => Tổng số giây => strtotime
    // hàm date chuyển giây thành ngày tháng
    // hàm strtotime chuyển ngày tháng thành giây

    // 5. kiểm tra ngày tháng => chuyển thành ngày tháng => true ; ngày hợp lệ
    echo "Ngày 2/29/2023 " . checkdate(2,28,2023) . "<br/>"; // đúng thì trả về 1, sai thì trả về 0

    // Có thể lấy ra từng tháng, ngày , năm trong hàm date
    echo "Hiện tại là " .":".  date("H") .":". date("i") .":".  date("s") ." Ngày ". date("d") ."/". date("m") ."/".  date("Y") ."<BR/>";

    // Thí dụ cho ngày 20/11/2019 hãy cộng thêm 12 ngày nữa để xem kết quả:
    $tsg = mktime(0,0,0,11,20+12,2016); // hàm mktime trả về số giây của tham số chuyền vào
    echo "Ngày tương ứng sau khi thêm 12 ngày là: " . date("m/d/Y",$tsg) . "<br/>";
    
    // có thể làm cách 2 như sau:
    // b1: lấy ra timestamp tương ứng với ngày đưa vào
    $tg = strtotime("2016-11-20");
    echo "Sau khi thêm 12 ngày thì kết quả là " . date("m/d/Y",$tg+ 12*24*3600) . "<br/>";

    // thực hiện các thí dụ: in ra ngày mai, tháng sau và năm sau dưới dạng ngày/tháng/năm
    echo "Ngày mai " .date("d/m/Y",mktime(0,0,0,date("d") + 1,date("m"),date("Y"))) . "<br/>";
    echo "Tháng sau " .date("d/m/Y",mktime(0,0,0,date("d"),date("m") + 1,date("Y"))). "<br/>";
    echo "Năm sau " .date("d/m/Y",mktime(0,0,0,date("d"),date("m") ,date("Y")+ 1)). "<br/>";

?>