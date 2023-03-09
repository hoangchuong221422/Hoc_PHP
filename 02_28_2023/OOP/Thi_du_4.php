<?php
    class Xe {
        public $SoXe;
        public $NhaSX;
        
        public function getSoXe(){
            return $this->SoXe;
        }


        public function setSoXe($sx){
            $this->SoXe = $sx;
        }


        public function getNhaSX(){
            return $this->NhaSX;
        }

        public function setNhaSX($nsx){
            $this->NhaSX = $nsx;
        }

        public function __construct($sx = "00000000", $nsx = "Không có")
        {
            $this -> SoXe = $sx;
            $this -> NhaSX = $nsx;
        }
        public function In_Thong_Tin(){
            echo "<br/> " . $this-> SoXe . " - " . $this-> NhaSX ."<br/>";
        }

    }
    // tạo đối tượng 
    $x1 = new Xe("2214","Yamahaha");
    $x1 ->In_Thong_Tin();

    $x2 = new Xe();
    $x2 ->In_Thong_Tin();
    echo "<br/>" . $x2 -> getSoXe()  . '<br/>';
    $x2->setSoXe("4122");
    echo "<br/>" . $x2 -> getSoXe()  . '<br/>';

?>