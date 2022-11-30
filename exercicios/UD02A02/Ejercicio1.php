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
					echo "<p>Dados dous números enteiros diferentes, devolver o número maior.</p>\n"
					?>
				<br/>
			</article>
		</section>
		<section>
			<article>
				<br/>
					<h2>Resultado</h2>	
					<?php	
					$num1 = 6;
					$num2 = 8;

					if ($num1 > $num2) {
						echo "<p>El número $num1 es mayor que $num2 </p>\n";	
					} else {
						echo "<p>El número $num1 es menor que $num2 </p>\n";
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
	