<?php 
$numero = rand(0,9);
$texto = "Indefinido";

    switch ($numero)
    {
        case 9:
            $texto = "Nueve";
            break;
        case 8:
            $texto = "Ocho";
            break;
        case 7:
            $texto = "Siete";
            break;
        case 6:
            $texto = "Seis";
            break;
        case 5:
            $texto = "Cinco";
            break;
        case 4:
            $texto = "Cuatro";
            break;
        case 3:
            $texto = "Tres";
            break;
        case 2:
            $texto = "Dos";
            break;
        case 1:
            $texto = "Uno";
            break;
        case 0:
            $texto = "Cero";
            break;
    }
      
    echo "el numero es " . $texto ; 

?>