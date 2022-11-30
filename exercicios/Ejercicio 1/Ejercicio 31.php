<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link href="CSS/estilos.css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet"/>
		<title>Plantilla</title>
	</head>
	<body>
		<header>
			<h1>MODULO IAW</h1>
		</header>
			<nav>
				<div id="barra">
					<p>‎ </p>
				</div>
			</nav>
		<section>
			<article>
				<br/>
					<h2>Exercicio 31</h2>
					<?php
						echo "<p> Crea un script que conteña distintas funcións:</br>
						– Función suma: debe realizar o indicado no exercicio 17. A función non devolverá ningún
						valor directamente mostrará o resultado cun echo.</br>
						– Función prezoFinal: debe realizar o indicado no exercicio 20- A función devolverá o prezo
						total de venta.</br>
						– Función cociente: debe realizar o indicado no exercicio 18. Hai que asegurar que os dous
						parámetros de entrada sexan de tipo enteiro. A función devolverá o cociente e o resto.</br>
						– Función transformarHora: debe realizar o indicado no exercicio 22. A función devolverá o
						número de minutos e segundos equivalentes.</br>
						– Función área: debe calcular a área (exercicio 27) do cilindro. Hai que asegurarse que tanto
						os parámetros como o tipo de retorno sexan números decimais.</br>
						– Función volume: o mesmo que a función anterior, pero para o cálculo da área.</br>
						– Desde outro script deberase facer uso de todas e cada unha das funcións creadas neste
						exercicio.</br>
						</p>\n"
					?>
				<br/>
			</article>
		</section>
		<section>
			<article>
				<br/>
					<h2>Resultado</h2>	
					<?php	

					 include "Ejercicio 31_funcions.php";

					 //Función Suma

					 $valor1 = 5;
					 $valor2 = 6;

					 echo "<p>" .suma($valor1,$valor2)."</p>\n";

					  //Función PrezoFinal

					  $precio = 3;
					  
					  echo "<p>O prezo + IVA de $precio é : ". prezoFinal($precio)."<br/></p>\n";

										//Función cociente
					$datos = cociente($valor1, $valor2);
						echo "<p>Dos números $valor1 e $valor2 obtemos a seguinte información: 
						<ul>
							<li>Cociente: $datos[0]</li>
							<li>Resto: $datos[1]</li>
						</ul><br/></p>\n";
					
					//Función transformarHora
					$hora = 2;
					$resultado = transformarHora($hora);
					
						echo "<p>O número de minutos de $hora horas son: $resultado[0]; e o  número de segundos son: $resultado[1]<br/></p>\n";
					
					
					//Función área e volume
					$radio = 2;
					$altura = 3;
					
						echo "A área do cilindro con radio $radio e altura $altura é: <ul>
							<li>Área: ".area($radio, $altura)."</li>
							<li>Volume: ".volume($radio, $altura)."</li>
						</ul><br/>";

					?>
				<br/>
			</article>
		</section>
		
		<footer> 
			<br/>
			<p>
				<span class="nombre">Víctor Suárez Sestelo</span>
				<span class="fecha">25/09/2022</span> 
			</p>
		</footer>
	</body>
</html>
	