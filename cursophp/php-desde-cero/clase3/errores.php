<?php

	#Desactivar toda notificación de error
	/*error_reporting('E_ERROR');
	$nombre = 'Hola';
	echo $nombre;
	echo $nombres;*/

	#E_NOTICE informa de variables no inicializadas o capturar errores en nombres de variables


	#Guardar errores en un log
	echo $nombre;
	ini_set("log_errors", 1);
	ini_set("error_log", "/tmp/php-error.log");
	error_log("Hay un error");

?>