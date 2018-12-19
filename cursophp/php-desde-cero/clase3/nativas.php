<?php

	#Arreglos y sus funciones nativas
	$cadena = '';
	$arreglo = [];
	/*$videojuegos = ['FIFA', 'Fortnite', 'Red Dead',
					'Call of Dutty', 'Battlefield',
					'Pokémon', 'GTA', 'The Sims', 'NFL'];*/

	#Vacío - empty
	#var_dump(empty($arreglo));
	#var_dump(empty($videojuegos));

	#Existe - isset
	#var_dump(isset($videojuegos[50]));

	#Contar elementos del arreglo
	#echo count($videojuegos);

	#Antepenúltimo elemento
	/*$posicion = count($videojuegos) - 2;
	echo $videojuegos[$posicion]." - ";
	echo $videojuegos[7];*/

	$videojuegos = ['FIFA', 'Fortnite', 'Red Dead',
					'Call of Dutty', 'Battlefield',
					'Pokémon', 'GTA', 'The Sims', 'NFL'];

	#Ordenar el arreglo de manera alfabética
	#sort($videojuegos);
	#var_dump($videojuegos);

	#Ordenar el arreglo sin perder su índice
	#asort($videojuegos);
	#var_dump($videojuegos);

	#Ordenar de manera inversa
	#rsort($videojuegos);
	#var_dump($videojuegos);

	#Ordenar de manera inversa sin perder su índice
	#arsort($videojuegos);
	#var_dump($videojuegos);

	#Sumar valores del arreglo
	#$numeros = [1, 20, 30, 15, 5, 10];
	#$suma = array_sum($numeros);
	#echo "Mi suma es ".$suma;

	#Encontrar diferencia entre arreglos
	/*$salonA = ['a1' => 'Juan', 'a2' => 'Susana', 'a3' => 'Homero', 'a4' => 'Jaime'];
	$salonB = ['a1' => 'Santiago', 'a2' => 'Diego', 'a3' => 'Susana', 'a4' => 'Jaime'];
	$diferencia = array_diff($salonA, $salonB);
	var_dump($diferencia);*/
 
	#Dividir un arreglo especificando su tamaño.
	$videojuegos = ['FIFA', 'Fortnite', 'Red Dead',
					'Call of Dutty', 'Battlefield',
					'Pokémon', 'GTA', 'The Sims', 'NFL'];

	/*$dividir = array_chunk($videojuegos, 2);
	var_dump($dividir);*/

	#Dividir el arreglo y eliminar lo anterior
	#var_dump( array_slice($videojuegos, 3) );

	#Unir arreglos
	/*$frutas = ['platano', 'uva', 'manzana'];
	$verduras = ['chile', 'tomate'];
	$unir = array_merge($frutas, $verduras);
	var_dump($unir);*/

	#Eliminar el último elemento
	#array_pop($videojuegos);
	#var_dump($videojuegos);

	#Agregar uno o más elementos al final del arreglo
	#array_push($videojuegos, 'Smash Bros');
	#var_dump($videojuegos);

	#Buscar un elemento en el arreglo
	$calAlumnos = array(10, 8, 10, 5, 5, 3, 6, 5);
	$buscar = array_search(3, $calAlumnos);
	var_dump($buscar);


?>