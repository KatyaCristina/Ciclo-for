<!--
2. Algoritmo que pida dos números y muestre todos los números impares que van desde el primero al segundo, se debe controlar que los valores son correctos.
 -->
<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ejercicio 2 </title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="container">
			<h3>2. Algoritmo que pida dos números y muestre todos los números impares que van desde el primero al segundo, se debe controlar que los valores son correctos.</h3>
			<h4> Primer número : <?php $num1 = 3; echo $num1 ?> </h4>
			<h4> Segundo número : <?php $num2 = 20; echo $num2 ?> </h4>
			<?php
			echo "Los números impares comprendidos entre el primero y el segundo son:<br/>";
			if($num1<$num2){
				for($i=$num1; $i<=$num2; $i++){
					if($i % 2 != 0){
						echo $i, "<br/>";
					}
				}
			}
			else{
				echo "El primer número debe ser menor que el primero";
			}
			
			?>
		</div>
	</body>

</html>

