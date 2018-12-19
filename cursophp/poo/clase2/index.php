<!DOCTYPE html>
<html>
<head>
	<title>POO Avanzado I</title>
</head>
<body>

	<?php

		define('INC', '/includes/');
		require_once __DIR__ . INC . 'Curso.inc.php';

		$curso1 = new Curso('POO en PHP', 'Yesi Days', '3 sesiones', 10, true);

		$curso2 = new Curso('Javascript desde 0', 'Álvaro Felipe', '6 sesiones', 0, true);

		echo $curso1->obtenerTitulo()."<br />";
		echo $curso1->obtenerProfesor()."<br />";

		$curso1->asignarTitulo('POO en PHP I');
		echo $curso1->obtenerTitulo()."<br />";

		$curso1->asignarRequerimiento(['PHP desde cero', 'Conocimientos básicos de PHP', 'Ganas de aprender', 'Práctica']);

		echo "<h3>Mis requerimientos para la clase</h3>";

		$curso1->obtenerRequerimiento();
		echo "<br />";

		echo Curso::$bienvenida."<br />";
		echo Curso::obtenerDenominacion();



	?>

</body>
</html>