<?php
    
    function arrays ($longarray):array
    {
        
        for ($i=0; $i < $longarray; $i++){
            $numeros[$i] = rand(1,10);
            
        }
        return $numeros;
    }
    $longarray = 20;
    $numeros = arrays($longarray);
    
    $j = 0;
    for ($i=0; $i < $longarray; $i++){
        
        $j++;

        if ($j == 11){
            echo "</br>";
            $j = 0;
        } else {
            echo $numeros [$i]." ";
        }
    }
    print_r($numeros);
?>