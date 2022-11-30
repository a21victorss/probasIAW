<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $compra = 95;
    $tipo = 'a';
    $tipo = strtolower($tipo);
    $pago = 'c';
    $pago = strtoupper($pago);
    //$correcto = true;
    $error = 0;
    
//Alternativa 2 con Switch

    switch($tipo){

        case 'x':
            switch($pago) {
                case 'C':
                    $compra *= 0.85;
                    break;
                case 'P':
                    $compra *= 1.10;
                    break;
                default:
                    $error = 2;
                    break;
            }
            break;

        case 'a':
            switch($pago){
                case 'C':
                    $compra *= 0.8;
                    break;
                case 'P':
                    $compra *= 1.05;
                    break;

                default:
                    $error = 2;
                    break;
            }
            break;
        default:
            $error = 1;
            break;
            
    }

        if ($error == 0){
            echo "<p> Tienes que pagar $compra </p>\n";
        } elseif ($error == 1){
            echo "<p> El parámetro tipo es incorrecto </p>\n";
        } elseif ($error == 2){
            echo "<p> El parámetro pago es incorrecto </p>\n";
        } 

/* Alternativa 1 con IF
 if($tipo == 'x' || $tipo == 'a') {
    
    if($pago == 'C' || $pago == 'P') {

    
    switch($tipo){

        case 'x':
            switch($pago) {
                case 'C':
                    $dto = $compra - ($compra * 0.15);
                    break;
                case 'P':
                    $dto = $compra + ($compra * 0.10);
                    break;
            }
            break;

        case 'a':
            switch($pago){
                case 'C':
                    $dto = $compra - ($compra * 0.20);
                    break;
                case 'P':
                    $dto = $compra + ($compra * 0.05);
                    break;

            }
            break;
        default:
            
    }

    echo "<p> Tienes que pagar $dto </p>\n";
    } else {

        echo "<p> Introduciste un pago mal</p>\n";

    }
    
}
else {

        echo "<p> Introduciste un tipo mal</p>\n";

    } 
*/
    /* Tipo 3
    switch($tipo . $pago){
        case "xC":
            $dto = $compra - ($compra * 0.15);
            break;
        case "xP":
            $dto = $compra + ($compra * 0.10);
            break;
        case "aC":
            $dto = $compra - ($compra * 0.20);
            break;
        case "aP":
            $dto = $compra + ($compra * 0.05);
            break;
        default:
            echo "<p> Introduciste un parametro incorrecto</p>\n";
            $correcto = false;
            break;
    }

        if ($correcto){
            echo "<p> Tienes que pagar $dto </p>\n";
        }
        */

    ?>
</body>
</html>