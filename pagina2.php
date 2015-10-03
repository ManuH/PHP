<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo "El nombre es: ".$_REQUEST['nombre']."<br>";
		if ($_REQUEST['edad'] >= 18) {
			echo "Es mayor de edad.";
		} else {
			echo "Es menor de edad.";
		}
 	?>
</body>
</html>