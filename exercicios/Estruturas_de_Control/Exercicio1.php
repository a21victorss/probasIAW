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
					<h2>Exercicio 1</h2>
					<?php
					echo "<p>Dada a hora, minuto e segundo, atopar a hora do seguinte segundo.</p>\n"
					?>
				<br/>
			</article>
		</section>
		<section>
			<article>
				<br/>
					<h2>Resultado</h2>	
					<?php	

					$hora = 13; 
					$minutos = 57;
					$segundos = 59;

					echo "<p>La hora es $hora : $minutos : $segundos </p>\n";
					$segundos++;
					if ($segundos == 60) {
						$segundos = 0;
						$minutos++;
					}
					if ($minutos == 60) {
						$minutos = 0;
						$hora++;
					}
					/*$segundos++;*/
					
					echo "<p>Despues de un segundo la hora es $hora : $minutos : $segundos </p>\n";

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
	