<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
	$num = rand(1, 100);
//	$num = 5;

	echo $num;
	echo "<br \>";

	if ($num <= 50) {
		echo $num . " Es menor o igual a 50";
	} else {
		echo $num . " Es mayor a 50";
	}

?>
</body>
</html>