<?php
    class Xe {
        public $SoXe;
        public $NhaSX;
        public function __construct($sx = "2214", $nsx = "Honda")
        {
            $this -> SoXe = $sx;
            $this -> NhaSX = $nsx;
        }
        public function In_Thong_Tin(){
            echo "<br/> " . $this-> SoXe . " - " . $this-> NhaSX ."<br/>";
        }
    }
    // tạo đối tượng 
    $x1 = new Xe();
    $x1 ->In_Thong_Tin();

    $x2 = new Xe("4122","Suzuki");
    $x2 ->In_Thong_Tin();
?>