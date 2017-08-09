<!--
3. Algoritmo que pida dos números y sume todos los números que van desde el primero al segundo. se debe controlar que los valores son correctos.
 -->

<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Ejercicio 3 </title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
		<h3>3. Algoritmo que pida dos números y sume todos los números que van desde el primero al segundo. se debe controlar que los valores son correctos.</h3>
		<h4> Primer número : <?php $num1 = 3; echo $num1 ?> </h4>
		<h4> Segundo número : <?php $num2 = 12; echo $num2 ?> </h4>
		
		<?php
			
			$suma=0;
			if($num1<$num2){
				for($i=$num1; $i<=$num2; $i++){
					$suma=$suma+$i;
				}
				echo "La suma de los números comprendidos entre el primero y el segundo es:", $suma;
			}
			else{
				echo "El primer número debe ser menor que el segundo";
			}
		?>
		</div>	
	</body>
</html> 