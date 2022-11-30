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
        /*$ciudad = ["Madrid" => 3, "Barcelona" => 2345, "Vigo" => 3234];
        $ciudad_max = max($ciudad);

        foreach($ciudad as $clave => $valor) {
                echo "La ciudad $clave tiene $valor habitantes.<br/>";
        }

        echo "<hr/>";

        foreach ($ciudad as $indice=>$valores) {
            if ($valores == $ciudad_max) {
                $nombre=$indice;  
            }
        }
        echo "la ciudad con mas habitantes es $nombre y tiene $ciudad_max habitantes. <br/>";*/
        function mayorPob($array)
        {
            $mayor=0;
            $ciudad="";
            if (is_array($array) && !empty($array)){
                foreach($array as $clave=>$valor){
                    if($valor > $mayor){
                        $mayor = $valor;
                        $ciudad=$clave;
                    }
                }
            }
            return $ciudad;
        }
        $ciudades = ["Madrid" => 1000000, "Barcelona" => 200000000, "Vigo" => 2];
        mayorPob(5);
        $intoo=5;
        echo"la ciudad mas cañera es " . mayorPob($intoo);
    ?>
</body>
</html>