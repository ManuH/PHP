<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo "El nombre es: ".$_REQUEST['nombre']."<br>";
		if ($_REQUEST['radio1'] == 1) {
			echo "No tiene estudios";
		} elseif ($_REQUEST['radio1'] == 2) {
			echo "Tiene estudios primarios";
		} else {
			echo "Tiene estudios secundarios";
		}
 	?>
</body>
</html>