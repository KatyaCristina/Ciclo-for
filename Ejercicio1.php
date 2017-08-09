<!-- 
1. Algoritmo que pida dos números y muestre todos los números pares que van desde el primero al segundo. se debe controlar que los valores son correctos.
 --->

<DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ejercicio1 </title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container">
		<h3>1. Algoritmo que pida dos números y muestre todos los números pares que van desde el primero al segundo. se debe controlar que los valores son correctos.</h3>
		<h4> Primer número : <?php $num1 = 2; echo $num1 ?> </h4>
		<h4> Segundo número : <?php $num2 = 15; echo $num2 ?> </h4>
		<?php
		echo "Los números pares comprendidos entre el primero y el segundo son:<br/>";
		if($num1<=$num2){
			for($i=$num1;$i<=$num2;$i++){
				if($i % 2 == 0){
					
				   echo $i,"<br/>";
				}
			}
		}
		else{
			echo "El primer número debe ser menor que el segundo";
		}
	
		?>
		</div>
	</body>
</html>

  
		