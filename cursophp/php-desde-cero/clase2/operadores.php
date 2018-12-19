<?php
	/*
		==================================================
		Operadores aritméticos

		Suma +, suma de a + b
		Resta -, diferencia de a - b
		Multiplicación *, producto de a * b
		División /, cociente de a y b
		Módulo %, resto de a dividido por b
		==================================================
	*/
		$a = 10;
		$b = 20;
		$c = 2;
		$suma = $a + $b;
		#echo "Suma ".$suma."<br />";

		$resta = $a - $b;
		#echo "Resta ".$resta."<br />";

		$multiplicacion = $a * $b;
		#echo "Multiplicación ".$multiplicacion."<br />";

		$division = $a / $c;
		#echo "Division 1: ".$division."<br />";

		$divisionDos = $c / $a;
		#echo "Division 2: ".$divisionDos."<br />";

		$modulo = $a % $c;
		#echo "Modulo 1: ".$modulo."<br />";

		$moduloDos = $c % $a;
		//echo "Modulo 2: ".$moduloDos."<br />";

	/*
		==================================================
		Operadores de asignación
		= += *= /= .=
		==================================================
	*/
		$a = 10;
		//$a += 5; //$a = $a + 5;

		//$a *= 5; //$a = $a * 5;
		//$a /= 5;
		//$a -= 5;
		//$a .= 5; //$a = $a ." ". 5;
		//echo $a;

		//$a = "abc"."edf";
		//echo $a;
		//$a .= "ghij";
		//echo $a;
	/*
		==================================================
		Operadores de incremento/decremento
		++$variable, $variable++
		--$variable, $variable--
		==================================================
	*/
		/*$valor = 15;
		$nuevoValor = $valor++;
		echo $nuevoValor;
		echo $valor;*/

		$valor = 15;
		$nuevoValor = --$valor;
		echo $nuevoValor."<br />";
		echo $valor."<br />";




?>