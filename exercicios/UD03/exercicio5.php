<?php


$arrayX= [5,7,8,1];
$arrayY= [6,5,2,6];

if(count($arrayY) == count($arrayX)){
    for ($i = 0; $i < count($arrayY); $i++) {
        $rdo[] = $arrayY[$i] + $arrayX[$i];

    }
}

print_r($rdo);

?>