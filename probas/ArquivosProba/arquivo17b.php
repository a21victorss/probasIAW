<?php

    $num = 4;
    $cadea = "Ola";

    if (is_numeric($num)) {
        echo "<p>A variable num é numérica</p>\n";
       
    } else {
        echo "<p>A variable num non é numérica</p>\n";
    }
    $tipo = gettype($num);
    echo "<p>Tipo de dato de num: $tipo </p>\n"

    if (is_numeric($cadea)) {
        echo "<p>A variable num é numérica</p>\n";
       
    } else {
        echo "<p>A variable num non é numérica</p>\n";
    }



?>