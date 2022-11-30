<?php
$i = 1;
$suma = 0;
if(empty($array)){
    echo "<p>Non hai notas dispoñibles</p>\n"
} else{
    echo "<table>";
    foreach ($array as $valor) {
        echo "<tr>
                    <th>Nota " . $i++ . "</th>
                    <td>$valor</td>
                </tr>";
        $suma += $valor;
    }

    $media = $suma / count($array);

    echo "<tr>
                <th>TOTAL</th>
                <td>" .round($media,2) . "</td>
            </tr>";
    echo "</table>";
}
?>