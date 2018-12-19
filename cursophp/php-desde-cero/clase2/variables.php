<?php
	//Variables en PHP

	#Reglas
	$nombre = 'Yesi';
	$_nombre = 'Yesi';

	$color = 'Rojo';
	$Color = 'Azul';
	$COLOR = 'Verde';

	$color = 'Blanco';
	$color = 14.10;

	//echo $color;

	$entero = 123;
	$negativo = -1000;
	$flotante = 13.1416;
	//echo $entero." ".$negativo." ".$flotante."<br />";

	$octal = 0755; //493
	$hexadecimal = 0xC4E; //3150
	$binario = 0b1010; //10

	//echo $octal." ".$hexadecimal." ".$binario."<br />";

	$nombre = "Yesi";
	$apellido = "Days";
	$edad = 34;
	$soltera = FALSE;
	/*echo gettype($nombre);
	var_dump($edad);*/

	$variable = "Lorem ipsum";
	$nueva = &$variable;
	$variable = "Nuevo dato";
	echo $nueva;

?>