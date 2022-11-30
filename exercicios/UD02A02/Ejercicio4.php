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
					<h2>Exercicio 4</h2>
					<?php
					echo "<p>Determinar se un número é múltiplo de 3 e 5.</p>\n"
					?>
				<br/>
			</article>
		</section>
		<section>
			<article>
				<br/>
					<h2>Resultado</h2>	
					<?php	
					 $num = 22;

					 if ($num%3 == 0) {
						echo "<p> $num es multiplo de 3 </p>\n";
					 }
					 if ($num%5 == 0) {
						echo "<p> $num es multiplo de 5 </p>\n";
					 }else{
						echo "<p> $num no es multiplo de 3 ni de 5 </p>\n";
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
	