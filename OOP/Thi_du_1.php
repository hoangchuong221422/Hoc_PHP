<?php

    class Xe {
        public $SoXe;
        public $nhaSX;
        public function In_Thong_Tin(){
            echo "<br/> " . $this-> SoXe . " - " . $this-> nhaSX ."<br/>";
        }
    }
    // Tạo đối tượng
     // che phép không khai cặp dấu ngoặc tròn khi không có tham số
    $x1 = new Xe();
    $x1 -> SoXe = '1224455';
    $x1 -> nhaSX = 'honda';
    $x1 -> In_Thong_Tin();
?>