<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
// $fecha = date("d/m/y");
$dia = date("d");

if ($dia > 10) {
//	echo $dia;
	echo "Fuera de fecha<br \>";
	$diferencia = $dia - 10;
	echo "Pasaron " . $diferencia . " dias desde el vencimiento";
} else {
	echo "string";
}
 ?>
</body>
</html>