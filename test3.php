<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$num = rand(1, 100);
		if($num < 10) {
			echo $num;
		} elseif ($num < 99) {
			echo $num."<br>";
			$decena = floor($num / 10);
			$unidad = $num - $decena * 10;
			if ($decena < $unidad) {
				echo "El menor es: ".$decena;
			} elseif ($unidad < $decena) {
				echo "El menor es: ".$unidad;
			} else {
				echo "Son iguales";
			}
		} else {
			echo $num."<br>";
			echo "El menor es: 0";
		}
	 ?>

	 <p>===============================================================</p>
	
	 <?php
	 	$num = rand(1, 3);

	 	if ($num == 3) {
	 		echo "tres";
	 	} elseif ($num == 2) {
	 		echo "dos";
	 	} else {
	 		echo "uno";
	 	}
	 ?>
</body>
</html>