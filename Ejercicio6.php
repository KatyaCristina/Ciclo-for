<!--
 6. Algoritmo que muestre la tabla de multiplicar de un número cualquiera.
 -->

<DOCTYPE html>
<html>
	<head>
	<title>Ejercicio 6 </title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
			<h3>6. Algoritmo que muestre la tabla de multiplicar de un número cualquiera.</h3>
			<?php
			$num=9;
			echo "La tabla del $num es:<br/>";
				for($i=1;$i<=10;$i++){
					$resultado=$num*$i;
					echo "$num *$i = $resultado","<br/>";
			}
				
			?>
			
		</div>
	
	</body>
</html>
 