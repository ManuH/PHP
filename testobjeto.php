<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		echo "Objetos y clases";
	?>
	<p>************************************</p>
	<?php 
		/**
		* 
		*/
		class Ejemplo

		{
			public $name;
			public $surname;
			public $age;
			public $ocupation;

			function Ingreso($name, $surname, $age, $ocupation)
			{
				$this->name = $name;
				$this->surname = $surname;
				$this->age = $age;
				$this->ocupation = $ocupation;
			}

			public function showvalues()
			{
				echo "Name: ".$this->name;
				echo "<br>";
				echo "Surname: ".$this->surname;
				echo "<br>";
				echo "Age: ".$this->age;
				echo "<br>";
				echo "Ocupation: ".$this->ocupation;
			}
		}
	?>
	<p>*************************************</p>
	<?php 
		$prueba = new Ejemplo;

		$prueba->Ingreso('nombre','apellido',21,'trabajador');
		$prueba->showvalues();
	?>
</body>
</html>