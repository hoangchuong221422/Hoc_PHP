<?php
    $myarr = array("HT" => "HTML","CS" => "CSS","JS" => "JAVASCRIPT", "P" => "PHP");
    $spt = count($myarr);
    foreach ($myarr as $key => $val){
        echo "Phần tử có chỉ: $key có giá trị $val </br>";
    }

?>