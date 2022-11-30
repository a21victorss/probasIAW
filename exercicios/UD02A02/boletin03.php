<?php
$cadena = ("Ejemplo para contar vocales");
$vocales = 0;

foreach (count_chars($cadena, 1) as $i => $val) 
	{
	if (preg_match('/[aeiouáéíóúü]/i',chr($i)))
            {
	        $vocales = $vocales + $val;
				
	}
    }
echo "<br> Vocales: $vocales ";


?>