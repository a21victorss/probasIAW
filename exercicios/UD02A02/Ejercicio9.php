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
					<h2>Exercicio 9</h2>
					<?php
					echo "<p> Ao introducir o valor dunha temperatura, obter o tipo de clima segundo a seguinte
					táboa:</p>\n"
					?>
				<br/>
			</article>
		</section>
		<section>
			<article>
				<br/>
					<h2>Resultado</h2>	
					<?php	
					$temperatura = 15;

					if($temperatura < 10){
						echo "<p> Frío </p>\n";
					}elseif($temperatura>= 10 && $temperatura<= 20){
						echo "<p> Nubrado </p>\n";
					}elseif($temperatura>= 21 && $temperatura<= 30){
						echo "<p> Calor </p>\n";
					}elseif($temperatura> 30){
						echo "<p> Tropical </p>\n";
					}
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
	