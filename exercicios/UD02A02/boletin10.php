
<?php
//Constantes
define("DESC_G", 0.15);
define("DESC_A", 0.2);
define("REC_G", 0.1);
define("REC_A", 0.05);

//VARIABLES
$mc = 20;
$m = 0;
$tp = 0;
$tc = "A";
$fp = "C";

    
    if($tc == 'G')
    {
    if($fp == 'C')
    {
    $m = $mc * 0.15;
    $tp = $mc - $m;
    echo  "DESCUENTO 15%";
    echo " Si el precio de compra es " . $mc . " el descuento que se aplica es de " . $m . " y el precio total es de: " . $tp;
    }else{
    $m = $mc * 0.1;
    $tp = $mc + $m;
    echo "RECARGO 10%";
    echo " Si el precio de compra es " . $mc . " el descuento que se aplica es de " . $m . " y el precio total es de: " . $tp;
    }
    }else{
    if($fp == 'C'){
    $m = $mc * 0.2;
    $tp = $mc - $m;
   echo "DESCUENTO 20%";
   echo " Si el precio de compra es " . $mc . " el descuento que se aplica es de " . $m . " y el precio total es de: " . $tp;
    }else{
    $m = $mc * 0.05;
    $tp = $mc + $m;
    echo  "RECARGO 5%";
    echo " Si el precio de compra es " . $mc . " el descuento que se aplica es de " . $m . " y el precio total es de: " . $tp;
    }
    }
    
  
?>


