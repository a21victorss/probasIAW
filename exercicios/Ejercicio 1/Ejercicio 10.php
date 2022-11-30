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
					<h2>Exercicio 10</h2>
					<?php
					echo "<p> A partir do exercicio 6, modifica o script e declara tres variables:</br>
						– Primeira: conterá o nome do módulo</br>
						– Segunda: conterá o número de horas do módulo.</br>
						– Terceira: conterá os días nos que se imparte o módulo separados por comas.</br>
						A partir destas variables e utilizando sentenzas echo deberá mostrarse o mesmo texto.</p>\n"
					?>
				<br/>
			</article>
		</section>
		<section>
			<article>
				<br/>
					<h2>Resultado</h2>	
					<?php	
					$Nome = "Implantación de Aplicacións Web";
					$horas = 122;
					$dias = "Martes, mércores e xoves.";

					echo "<p> O módulo de " . $Nome . " ten unha duracion de " . $horas ." horas.</p>\n";
					echo "<p> Este módulo impártese os días: " . $dias . "</p>\n"; 
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
	