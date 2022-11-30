<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            $num1 = 45;
            $num2 = 2;

            $num1 += $num2;
            echo "<li>Suma: " . $num1 . "</li>\n";

            $num1 -= $num2;
            echo "<li>Resta: " . $num1 . "</li>\n";

            $num1 /= $num2;
            $num1 = $num2 / $num1;
            echo "<li>Division: " . $num1 . "</li>\n";

            $num1 = $num1 % $num2;
            echo "<li>Módulo: " . $num1 . "</li>\n";

            $num1 = -55;

            echo "<li>Abs: " . abs($num1) . "</li>\n";
            echo "<li>Num1: " . $num1 . "</li>\n";

            echo "<li>Max: " . abs(max(-55, -3, -897, -1098, -345, -9)) . "</li>\n";
            echo "<li>Max: " . max(abs(-55), abs(-3), abs(-897), abs(-1098), abs(-345), abs(-9)) . "</li>\n";
        ?>
</body>
</html>