<?php

	echo "<h1>Bases de datos con PHP</h1>";

	require_once __DIR__. '/conecta.inc.php';

	$conecta = conecta();
	if ($conecta == true) {
		echo "<h3>Estamos conectados a la BD</h3>";
	}


?>