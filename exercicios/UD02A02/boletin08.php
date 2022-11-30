<?php
$consumo = rand(98,200);

if ($consumo <= 100)
    $descuento = $consumo * 0.1;
 else {
    $descuento = $consumo * 0.2;
    $impuesto = ($consumo - $descuento) * 0.19;
    $importe_a_pagar = $consumo - $descuento + $impuesto;
}
echo 'Valor de descuento: ' . $descuento . "<br/>\n";
echo 'Valor de importe a pagar: ' . $importe_a_pagar . "<br/>\n";
echo 'Valor de impuesto: ' . $impuesto . "<br/>\n";
echo 'El Consumo es: '. $consumo .  "<br/>\n";
?>