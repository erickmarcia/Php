<!DOCTYPE html>
<html>
<head>
	<title>Arreglos</title>
</head>
<body>
	<p>Arreglos</p>
</body>
</html>
<?php

	#Arreglos

	$numeros = [];
	$numeros = array();

	/*var_dump($numeros);
	print_r($numeros);*/

	#Arreglos indexados
	#$dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves'];
	$dias = array('Lunes', 'Martes', 'Miércoles', 'Jueves');
	var_dump($dias);
	//print_r($dias);

	#echo $dias[2];
	$dias[] = 'Viernes';
	#var_dump($dias);

	$dias[13] = 'Día libre';
	#var_dump($dias);

	#echo $dias[0];
	#$usuario = ['nombre' => 'Yesi', 'edad' => 34, 'lenguaje' => 'PHP'];
	$usuario = array('nombre' => 'Yesi.', 'edad' => 34, 'lenguaje' => 'PHP');
	var_dump($usuario);

	#echo "Mi nombre es ".$usuario['nombre']."<br />";

	/*$alumnos = array(
		array('Juan', 20, 'México'), #Fila 1
		array('Salomé', 25, 'Perú'), #Fila 2,
		array('Carlos', 24, 'Bolivia'), #Fila 3,
		array('Homero', 37, 'Neza')
	);

	echo $alumnos[1][0];

	var_dump($alumnos);*/

	/*$alumnos = [
		['Juan', 20, 'México'],
		['Salomé', 25, 'Perú']
	];*/

	#var_dump($alumnos);

	$alumnos = array(
		array('nombre' => 'Juan', 'edad' => 20, 'país' => 'México'),
		array('nombre' => 'Salomé', 'edad' => 25, 'país' => 'Perú'),
		array('nombre' => 'Carlos', 'edad' => 24, 'país' => 'Bolivia')
	);

	var_dump($alumnos);

	$alumnos[1]['calificacion'] = 9.5;

	var_dump($alumnos);

	#echo "<b>".$alumnos[2]['edad'];




















?>