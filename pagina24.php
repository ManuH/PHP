<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo "El nombre es: ".$_REQUEST['nombre']."<br>";
		if ($_REQUEST['Ingresos'] == "+3000") {
			echo "Debe pagar impuestos";
		} else {
			echo "No debe pagar impuestos";
		}
 	?>
</body>
</html>