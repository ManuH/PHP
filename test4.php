<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		for($i = 1; $i <= 10; $i++) {
			$result = 2 * $i;
			echo "2 * " . $i . " = ". $result;
		}

		$i = 1;
		
		while ($i <= 10) {
			$result = 2 * $i;
			echo "2 x " . $i . " = ". $result;
			$i++;
		}

		$i = 1;
		do {
			$result = 2 * $i;
			echo "2 x " . $i . " = ". $result;

		} while ($i <= 10);

	?>
</body>
</html>