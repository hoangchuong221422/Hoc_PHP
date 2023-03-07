<?php
   
    $a = 2;
    $b = 2;
    if ($a == 0){
        if($b == 0) {
            echo "Phương trình vô số nghiệm";
        } else {
            echo "Phương trình vô nghiệm";
        }
    }else{
        $c = -$b / $a;
        echo "Phương trình có nghiệm x= $c";
    }
?>