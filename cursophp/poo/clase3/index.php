<!DOCTYPE html>
<html>
<head>
	<title>POO Avanzado I</title>
</head>
<body>

	<?php

		#Incluído mi archivo global, todas mis clases.
		require_once __DIR__ . '/includes/Global.inc.php';

		#Instanciar un estudiante
		$estudiante = new Estudiante('Yesi', 'Days', 'silvercorp@gmail.com');

		#var_dump($estudiante);
		echo "<p>".$estudiante->bienvenida()."</p>";
		echo "<p>".$estudiante->despedida()."</p>";
		echo "<p>".$estudiante->validarCompra()."</p>";

		echo "<br />";
		echo $estudiante::MONEDA;



		#Instanciar un profesor
		$profesor = new Profesor('Jon', 'Mircha', 'jormircha@gmail.com');
		#var_dump($profesor);
		echo "<p>".$profesor->bienvenida()."</p>";
		echo "<p>".$profesor->despedida()."</p>";

		echo "<br />";
		echo $profesor::MONEDA;




	?>

</body>
</html>