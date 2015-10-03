<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$money = $_REQUEST['Monto'];
		if ($_REQUEST['Moneda'] == "Dolar") {
			$montopeso = $money * 29.067;
		} elseif ($_REQUEST['Moneda'] == "Euro") {
			$montopeso = $money * 32.5129;
		} elseif ($_REQUEST['Moneda'] == "Peso") {
			$montopeso = $money * 1.914;
		} elseif ($_REQUEST['Moneda'] == "Real") {
			$montopeso = $money * 7.657;
		} else {
			$montopeso = $money * 3.1847;
		}
		echo "Su monto en ".$_REQUEST['Moneda']." equivale a: ".$montopeso." en pesos uruguayos.";
 	?>
 	<a href="index.html">Volver a seleccion</a>
 	<a href="form7.php">Volver</a>
</body>
</html>