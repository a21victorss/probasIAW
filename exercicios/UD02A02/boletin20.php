<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bol 20</title>
</head>
<body>
    <?php
        $rangoI = 16;
        $rangoS = 100;
        $valor = 4;
        $cont = 0;
        $inf = $rangoI;

        for( ; $rangoI <= $rangoS; $rangoI++){
            if ($rangoI % $valor == 0){
                $cont++;
            }
        }
        echo "<p>El numero de múltiplos de $valor entre $inf y $rangoS es: $cont</p>\n";
    ?>
</body>
</html>