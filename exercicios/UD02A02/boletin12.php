<?php

$mes = rand(1,12);
switch ($mes) {
    case 1:
    case 2:
    case 3:
        $trimestre ="1º";
        break;
    case 4:
    case 5:
    case 6:
        $trimestre ="2º";
        break;
    case 7:
    case 8:
    case 9:
        $trimestre ="3º";
        break;
    case 10:
    case 11:
    case 12:
      $trimestre ="4º";
      break;
    default:
    echo "<p> El número introducido no corresponde a un mes válido </p> ";
    break;
}

if (($mes >= 1) && ($mes <=12)) {
    echo "<p> El mes ". $mes . " corresponde al " . $trimestre . " trimestre </p>";
}             

?>






