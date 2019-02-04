<!DOCTYPE html>
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
          require_once __DIR__. '/includes/Global.inc.php';

          #Instanciar un estudiante
          $estudiante = new Estudiante('Erick','Marcia','erickmarcia14@gmail.com');
        //   var_dump($estudiante);
          echo "<p>".$estudiante->bienvenida()."</p>";
          echo "<p>".$estudiante->despedida()."</p>";
          echo "<p>".$estudiante->validarCompra()."</p>";
  
        echo "<br/>";
        echo $estudiante::MONEDA;
          #instanciar un Profesor

          $profesor = new Profesor('Lenin','Martinez','mar_cia14@hotmail.com');
        //   var_dump($profesor);
          echo "<p>".$profesor->bienvenida()."</p>";
          echo "<p>".$profesor->despedida()."</p>";
          echo $estudiante::MONEDA;
    ?>
</body>
</html>