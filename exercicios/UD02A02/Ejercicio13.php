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
					<h2>Exercicio 13</h2>
					<?php
					echo "<p>Un negocio ten dous tipos de cliente: cliente xeral (X) e cliente afiliado (A).
					Acepta dúas formas de pago: ao contado (C) e en prazos (P). Crea un scripts que dada a cantidade da compra se obteña a cantidade do desconto ou a cantidade do recargo e o total a
					pagar segundo a seguinte táboa:</p>\n"
					?>
				<br/>
			</article>
		</section>
		<section>
			<article>
				<br/>
					<h2>Resultado</h2>	
					<?php
					$tipo = 'X';
					$pago = 'P';
					$compra = 95;
					$tipo = strtolower($tipo);
					$pago = strtolower($pago);
					$correcto = true;
					
				/*	if ($tipo == 'X' || $tipo == 'A'){
						if($pago == 'C' || $pago = 'P'){
						switch($tipo) {
							case 'x':
								switch($pago) {
									case 'c':
										$compra = $compra - ($compra * 0.15);
										break;
									case 'p':
										$compra = $compra + ($compra * 0.10);
										break;	
								}
								break;
							case 'a':
								switch($pago) {
									case 'c':
										$compra = $compra - ($compra * 0.20);
										break;
									case 'p':
										$compra = $compra + ($compra * 0.05);
									break;
								}
								break;
						}
						echo "<p>Tes que pagar: " . $compra . " €</p>\n";
					}
						else {

							echo "<p>Introduciste un tipo incorrecto</p>\n";
					}
				

				}else {

						echo "<p>Introduciste un tipo incorrecto</p>\n";

					};
				*/
				switch($tipo) {
					case 'x':
						switch($pago) {
							case 'c':
								$compra = $compra - ($compra * 0.15);
								break;
							case 'p':
								$compra = $compra + ($compra * 0.10);
								break;
							default:
							echo "<p>Introduciste un pago incorrecto </p>\n";
							$correcto = false;
							break;
						}
						break;
					case 'a':
						switch($pago) {
							case 'c':
								$compra = $compra - ($compra * 0.20);
								break;
							case 'p':
								$compra = $compra + ($compra * 0.05);
								break;
							default:
							echo "<p>Introduciste un pago incorrecto </p>\n";
							$correcto = false;
							break;
						}
						break;
						default:
							echo "<p>Introduciste un tipo incorrecto </p>\n";
							$correcto = false;
							break;
				}
				if ($correcto){
					echo "<p>Tes que pagar ". $compra . " € </p>\n";

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
	