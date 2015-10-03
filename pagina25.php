<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$a = $_REQUEST['lado1'];
		$b = $_REQUEST['lado2'];
		$c = $_REQUEST['lado3'];
		if ($_REQUEST['Calculo'] == "Area") {
			$s = ( $a + $b + $c ) / 2;
			$area = sqrt($s * ($s - $a) * ($s - $b) * ($s - $c));
			echo "El area es: ".$area;
		} else {
			echo "El perimetro es: ".($a + $b + $c);
		}
 	?>
</body>
</html>