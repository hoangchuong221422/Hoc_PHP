<?php
    class Xe {
        public $SoXe;
        public $NhaSX;
        public function __construct()
        {
            $this -> SoXe = "1234565";
            $this -> NhaSX = "Honda";
        }
        public function In_Thong_Tin(){
            echo "<br/> " . $this-> SoXe . " - " . $this-> NhaSX ."<br/>";
        }
    }
    // tạo đối tượng 
    $x1 = new Xe();

    $x1 ->In_Thong_Tin();

    $x2 = new Xe();
    $x2 ->In_Thong_Tin();
?>