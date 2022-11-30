<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletin 15</title>
</head>
<body>
    <?php

        $num = 10;
        $i = 0;
/*Primera forma
        
        $mul = 0;
        while ($i <= $num) {
            $i++;
            if ($i % 5 ==0 ){

                $mul++;
            } 
        }
     echo "<p> El numero de multiplos de 5 en $num es $mul </p>"*/
     $multiplos = 0;

     while ($i <= $num){
        $multiplos++;
        $i += 5;
     }
     $multiplos --;
     echo "<p> El numero de multiplos de 5 en $num es $multiplos </p>"

    ?>
</body>
</html>