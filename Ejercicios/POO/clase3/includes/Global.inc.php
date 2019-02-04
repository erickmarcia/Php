<?php

/* Se Creo Global.inc.php para incluir todas las clases que necesito
y no estar poniendolo todo en el index.
y si necesitamos alguna vista la podemos poner aquí y asi solo llamamos a global.inc
Todos los archivos include ponerlos aqui y en el directorio poner
require_once __DIR__.INC.'/includes/Global.inc.php';
Example html
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POO AVANZADO I</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
      #Incluido en el archivo global, que tiene todas mis clases
          require_once __DIR__.INC.'/includes/Global.inc.php';
    ?>
</body>
</html>

*/
// require_once __DIR__.INC.'Curso.inc.php';

        // define ('INC', '/includes/');

require_once __DIR__.'/Persona.inc.php';//Super Clase
require_once __DIR__.'/Estudiante.inc.php';//SubClase
require_once __DIR__.'/Profesor.inc.php';//SubClase
require_once __DIR__.'/Curso.inc.php';//Clase adicional


?>