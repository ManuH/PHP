<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$D = $_REQUEST['D'];
		$c = $_REQUEST['l'];
		//altura
		$h = sqrt((($c * $c) + ($D * $D) /4));
		//calcular area
		$area = ($D*$h) / 2;
		echo "El area es: ".$area."<br>";
		//perimetro
		$perimetro = $c * 4;
		echo "El perimetro es: ".$perimetro;
 	?>
</body>
</html>