<?php

require_once 'config.php';

$page = $_GET['page'];

if(!empty($page))
{
    #http://curso-php.test/cms/index.php?page=buscar
     $data = array (
         'dashboard' => array('model' => 'Admin', 'view' => 'dashboard', 'controller' => 'AdminController'),
         'registro' => array('model' => 'Usuario', 'view' =>' registro', 'controller' => 'UserController'),
         'login' => array('model' => 'Usuario', 'view' => 'login', 'controller' => 'UserController'),
         'blog' => array('model' => 'Blog', 'view' => 'index', 'controller' => 'BlogController'),
         'publicar' => array('model' => 'Blog', 'view' => 'post', 'controller' => 'BlogController'), #Crear un artículo
         'articulo' => array('model' => 'Blog', 'view' => 'readArticle', 'controller' => 'BlogController'), #Mostrar la información del artículo
         'buscar' => array('model' => 'Blog', 'view' => 'searchResult', 'controller' => 'BlogController'), #Encargado de buscar
     );

foreach($data as $key => $components) {
    if ($page == $key) {
      $model = $components['model'];
      $views = $components['view'];
      $controller = $components['controller'];
      break;
    }
  }


     if (isset($model)) {
    require_once 'controllers/'.$controller.'.php';
    $objeto = new $controller();
    $objeto->$views();
  }
} else {
  header('Location: index.php?page=blog');
}

?>