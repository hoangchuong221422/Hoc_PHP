<?php
    $conn = mysqli_connect("localhost","root","","qlsvc21th2");

    if($conn){
        echo "Kết nối thành công";
    }

    mysqli_close($conn);

?>