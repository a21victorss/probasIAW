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
					<h2>Exercicio 6</h2>
					<?php
					echo "<p>A partir do exercicio 4, insire con código HTML unha táboa (co horario completo do
					grupo) entre o primeiro e o segundo parágrafo. Proba a inserir o código coas distintas
					alternativas para identificar código PHP.</p>\n"
					?>
				<br/>
			</article>
		</section>
		<section>
			<article>
				<br/>
					<h2>Resultado</h2>	
					 <p>
					 <table border=1 summary="Tabla ejercicio 1">
						 <caption>HORARIO 2ºASIR</caption>
						 <!-- fila 1 -->
						 <tr>
							 <th scope="row">HORAS</th>
							 <th scope="row">LUNES</th>
							 <th scope="row">MARTES</th>
							 <th scope="row">MIERCOLES</th>
							 <th scope="row">JUEVES</th>
							 <th scope="row">VIERNES</th>
						 </tr>
					 
					 <!-- fila 2 -->
						 <tr>
							 <th scope="row">1ª</th>
							 <td rowspan="2">ASXBD</td>
							 <td rowspan="3">SRI</td>
							 <td rowspan="2">SAD</td>
							 <td rowspan="3">ASO</td>
							 <td rowspan="3">ASO</td>
							 
						 </tr>
					 
					 
					 <!-- fila 3 -->
						 <tr>
							 <th scope="row">2ª</th>
							 
						 </tr>
						 
						 <!-- fila 4 -->
						 <tr>
							 <th scope="row">3ª</th>
							 <td rowspan="2">ASO</td>
							 <td rowspan="2">IAW</td>
			 
						 </tr>
			 
							 
						 <!-- fila 5 -->
						 <tr>
							 <th scope="row">4ª</th>
							 <td>SAD</td>
							 <td>IAW</td>
							 <td>ASXBD</td>
						 </tr>
						 
						 <!-- fila 6 -->
						 <tr>
							 <th colspan="6">RECREO</th>
						 </tr>
						 
						 <!-- fila 7 -->
						 <tr>
							 <th scope="row">5ª</th>
							 <td>EIE</td>
							 <td>SAD</td>
							 <td>IAW</td>
							 <td>IAW</td>
							 <td>ASXBD</td>
						 </tr>
						 
						 <!-- fila 8 -->
						 <tr>
							 <th scope="row">6ª</th>
							 <td rowspan="3">SRI</td>
							 <td rowspan="2">EIE</td>
							 <td rowspan="2">SRI</td>
							 <td rowspan="2">SAD</td>
							 <td rowspan="2">IAW</td>
						 </tr>
						 
						 
						 <!-- fila 9 -->
						 <tr>
							 <th scope="row">7ª</th>
						 </tr>
						 
						 <tr>
							 <th scope="row">8ª</th>
						 </tr>
			 
					 </table>
					 </p>
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
	