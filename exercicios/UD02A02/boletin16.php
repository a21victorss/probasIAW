<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bol 16</title>
</head>
<body>
    <?php
        $num = 111133555577777999;
        $cociente = $num;
        $cont = 0;
        $contDix = 0;
        $max = 0;

//Primer caso. Cuantos dígitos tienen
        while ($cociente != 0){
            $digito = $cociente % 10;
            $cociente = floor($cociente / 10);
            $contDix++;
//Segundo caso. Números pares
echo "*$digito*";            
if ($digito % 2 == 0){
               $cont++; 
            }
//Tercer caso. Mayor dígito
            if($digito > $max){
                $max = $digito;
            }
        }
       
        echo "  \t\t<ul>\n
                    \t\t\t <li>Número de dígitos: $contDix</li>\n
                    \t\t\t <li>Número de pares: $cont</li>\n
                    \t\t\t <li>Mayor dígito: $max</li>\n
                 \t\t </ul>";
    ?>
</body>
</html>