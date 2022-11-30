<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletin 14</title>
</head>
<body>
    <?php
    $ninf = 400;
    $nsup = 22;
    $cont = 0;
    $i = $ninf;
 /*
     if ($ninf < $nsup){
            while ($i <= $nsup) {
                
                if ($i % 2 == 0){

                    $cont++;
                }
                $i++;
            }
            echo "<p> Los pares entre $ninf y $nsup son : $cont </p>";
    } 
*/
// La más corta
    if ($ninf > $nsup ){
        $i = $nsup;
        $nsup = $ninf;
        $ninf = $i; }
        while ($i <= $nsup) {
                
            if ($i % 2 == 0){

                $cont++;
            }
            $i++;
        }
        echo "<p> Los pares entre $ninf y $nsup son : $cont </p>";
   
    ?>
</body>
</html>