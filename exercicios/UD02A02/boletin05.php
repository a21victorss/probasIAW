<?php
    $num = rand(1,10);
    echo "<p> Num: " . $num ."</p>\n";
    if (($num % 2) == 0) {
        echo "<p> Tocouche un numero par </p>\n";
    } else {
        echo "<p> Tocouche un numero impar </p>\n";
    }
   
?>