<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$cant_depor = 0;
		echo "El nombre es: ".$_REQUEST['nombre']."<br>";
		if (isset($_REQUEST['check1'])) {
			$cant_depor++;
		}
		if (isset($_REQUEST['check2'])) {
			$cant_depor++;
		}
		if (isset($_REQUEST['check3'])) {
			$cant_depor++;
		}
		if (isset($_REQUEST['check4'])) {
			$cant_depor++;
		}
		echo "Practica ".$cant_depor." deportes";
 	?>
</body>
</html>