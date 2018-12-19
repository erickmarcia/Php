<?php

	//echo "Condicionales";

	/*
		if (condición) {
			bloque de código
		} else {
			bloque de código
		}

	*/

	/*$numero = 2;
	if ( $numero == 1 ) {
		echo "El número es igual a 1<br />";
	} else if ( $numero == 2) {
		echo "El número es igual a 2<br />";
	} else if ( $numero == 3) {
		echo "El número es igual a 3<br />";
	} else if ( $numero == 4) {
		echo "El número es igual a 4<br />";
	} else {
		echo "Es otro número<br />";
	}*/

	/*$a = ($numero == 1) ? 1 : 2;
	echo "El número es igual a ". $a ."<br />";*/

	/* switch ( condicion ) {
		case X:
			bloque de código
			break;
		default:
			bloque de código
			break;
	}
	*/

	/*switch ( $numero ) {
		case 1:
			echo "El número es igual a 1<br />";
			break;
		case 2:
			echo "El número es igual a 2<br />";
			break;
		case 3:
			echo "El número es igual a 3<br />";
			break;
		default:
			echo "Es otro número<br />";
			break;
	}*/

	// and &&
	// or ||
	/*$calificacion = 85;
	if ($calificacion > 92) {
		$nota = 'A';
		$mensaje = 'Excelente';
	} elseif ($calificacion <= 92 and $calificacion > 83) { //84 hasta 92
		$nota = 'B';
		$mensaje = 'Bien';
	} elseif ($calificacion <= 83 and $calificacion > 74) {
		$nota = 'C';
		$mensaje = 'Regular';
	} elseif ($calificacion <= 74 and $calificacion > 62) {
		$nota = 'D';
		$mensaje = 'Mal';
	} else {
		$nota = 'F';
		$mensaje = 'Reprobado';
	}

	echo "Hola, saliste ".$mensaje." en tu examen, la nota final es ".$nota;*/

	/*$arreglo = [10, 20, 40];
	if (empty($arreglo)) {
		echo "Está vacío";
	} else {
		echo "Tiene datos";
	}*/

	/*$curso1 = "Videojuegos";
	$curso2 = "Netflix";

	if ($curso1 == 'PHP' or $curso2 == 'MySQL'){
		echo "Eres un programador backend<br />";
	} else if ($curso1 == 'React' or $curso2 == 'Vue'){
		echo "Eres un programador frontEnd<br />";
	} else if ($curso1 == 'Android' or $curso2 == 'Swift') {
		echo "Eres un programador móvil<br />";
	} else {
		echo "Creo que no estás estudiando<br />";
	}*/

	$numero = 100;
	if ($numero === 100) {
		echo "Es identico";
	} else {
		echo "No es identico";
	}









?>