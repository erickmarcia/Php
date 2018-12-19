<?php

	############ While (Mientras) ############
	/*
		while ( condicion ) {
			bloque de código
			Detenerse
		}

	*/
	/*$i = 1;
	while ( $i < 5 ) {
		echo "El número es ".$i."<br />";
		$i++; //3 + 1 = 4
	}*/

	/*$frutas = array ( 'naranja', 'manzana', 'plátano', 'uvas', 'mandarina' );

	$salir = 0;
	$i = 0;

	while ( $salir != 1 ) {
		if ( $frutas[$i] == 'uvas' ) {
			echo "<p>Encontré las uvas</p>";
			$salir = 1;
		} else {
			echo "<p>La fruta encontrada es ".$frutas[$i]."</p>";
			$i++;
		}
	}*/


	############ Do-While (Hacer-Mientras) ############
	/*
		incrementar
		do {
			bloque de código
		} while ( condicion );
	*/

	/*$i = 5;
	do {
		echo "Número ".$i."<br />";
		$i++;
	} while ( $i < 5);*/


	############ For (Para) ############
	/*
		expresion1 = Evalua la iteración del ciclo, inicializa los datos
		expresion2 = Evaluación lógica
		expresion3 = Conclusión del ciclo
		for (expresion1; expresion2; expresion3) {
			bloque de código
		}
	*/
		/*$i = 1;
		while ( $i < 5 ) {
			echo "El número es ".$i."<br />";
			$i++; //3 + 1 = 4
		}*/

		/*for ($i = 1; $i < 5; $i++) {
			echo "El número es ".$i."<br />";
		}*/

		/*for ($i = 1, $j = 10; $i < 50 and $j < 100; $i+=10, $j+=10) {
			echo "El número es ".$i."<br />";
		}*/


	############ Foreach (Para cada) ############
	/*

		foreach (arreglo AS valor) {
			bloque de código
		}
	*/


	/*$redesSociales = array("www.facebook.com", "www.twitter.com", "www.instagram.com", "www.flickr.com");

	foreach ($redesSociales AS $rs) {
		echo $rs."<br />";
	}*/

	/*$redesSociales = array('FB' => 'www.facebook.com', 'TW' => 'www.twitter.com', 'IN' => 'www.instagram.com');
	foreach ($redesSociales AS $llave => $valor) {
		echo $llave." ".$valor."<br />";
	}*/










?>