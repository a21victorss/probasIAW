<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bol 21</title>
</head>
<body>
    <?php
        $num = 29;
        $i = 2;
        $cont = 0;
        $primo = false;
    
//Con bucle do while

        do{
            if ($num % $i == 0) {
                $primo = true;

            }
            $i++;
        } while(!$primo && ($i < $num));

        if(!$primo ){
            echo "<p> El número es primo</br></p>\n";
        } else {
            echo "<p> El número no es primo</br></p>\n";
        }

//Con bucle for
        
        for($i = 2; ($i <  $num) && !$primo; $i++){
            if ($num % $i == 0) {
                $primo = true;
                break; //No recomendable
            }
        }
        
        if(!$primo ){
        echo "<p> El número es primo</p>\n";
        } else {
        echo "<p> El número no es primo</p>\n";
        }
    
    ?>
</body>
</html>