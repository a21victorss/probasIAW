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
					<h2>Exercicio 2</h2>
					<?php
					echo "<p> Dada un día e o número de mes, devolver a estación do ano de acordo á seguinte
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
					$dia = 21;
					$mes= 3;

					echo "<p>O día é o $dia do mes $mes</p>\n";

					switch ($mes) {
						case 1:
							echo "<p>Estás en Inverno</p>\n";
							break;
						case 2:
							echo "<p>Estás en Inverno</p>\n";
							break;
						case 3:
							if ($dia <= 20) {
								echo "<p>Estás en Inverno</p>\n";
							}elseif ($dia > 20) {
								echo "<p>Estás en Primavera</p>\n";
							}
							break;
						case 4:
							echo "<p>Estás en Primavera</p>\n";
							break;
						case 5:
							echo "<p>Estás en Primavera</p>\n";
							break;
						case 6:
							if ($dia <= 21) {
								echo "<p>Estás en Inverno</p>\n";
							}elseif ($dia >21) {
								echo "<p>Estás en Verán</p>\n";
							}
							break;
						case 7:
							echo "<p>Estás en Verán</p>\n";
							break;
						case 8:
							echo "<p>Estás en Verán</p>\n";
							break;
						case 9:
							if ($dia <= 22) {
								echo "<p>Estás en Verán</p>\n";
							}elseif ($dia >22) {
								echo "<p>Estás en Outono</p>\n";
							}
							break;
						case 10:
							echo "<p>Estás en Outono</p>\n";
							break;
						case 11:
							echo "<p>Estás en Outono</p>\n";
							break;
						case 12:
							if ($dia <= 20) {
								echo "<p>Estás en Outono</p>\n";
							}elseif ($dia >20) {
								echo "<p>Estás en Inverno</p>\n";
							}
						  break;
						default:
						echo "<p> El número introducido no corresponde a un mes válido </p> ";
						break;
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
	