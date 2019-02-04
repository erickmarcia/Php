<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POO Avanzado I</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php
        define ('INC', '/includes/');
        require_once __DIR__.INC.'Curso.inc.php';

        
    $curso1 = new Curso('POO en PHP', 'Yesi Days', '3 Sesiones', 10, true);
    $curso2 = new Curso('JavaScript desde 0', 'Alvaro Felipe', '6 Sesiones', 0, true);

   

    $curso1->asignarTitulo('POO en PHP I');
    // echo $curso1->obtenerTitulo();

    echo $curso1->obtenerTitulo();
    echo $curso1->obtenerProfesor();

    $curso1->asignarRequerimiento(['Php desde Cero', 'Conocimientos Basicos de PHP', 'Ganas de Aprender','Prática']);
    echo "<h3> Mis requerimientos para la Clase </h3>";
    $curso1->obtenerRequerimiento();

    echo Curso::$moneda;
     
    echo Curso::$bienvenida."<br/>";
    echo Curso::obtenerDenominacion();
    ?>
</body>
</html>