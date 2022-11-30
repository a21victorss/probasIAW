<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bol 17</title>
</head>
<body>
    <?php
        $num = 11551;
        $i = 0;
        $cociente = $num;
        $rdo = 0;

        while ($cociente != 0) {
            $digito = $cociente % 10;
            $cociente = floor($cociente / 10);

            $rdo = ($rdo * 10) + $digito;
        }

        echo "<p>$num a la inversa es: $rdo </p>\n"


    ?>
</body>
</html>