<?php
  
require_once 'models/user.php';

class UserController {

    public function login() {
	session_start();
    session_destroy();
    require_once('./views/includes/cabecera.php');
    require_once('./views/paginas/login.php');
    require_once('./views/includes/pie.php');
	}

	// registry
    public function registro(){
        // Carga las cabecera y pie de cada pagina
        require_once('./views/includes/cabecera.php');
		require_once('./views/paginas/registro.php');
	    require_once('./views/includes/pie.php');
    }

    public function saveUser($data){
        $error = '';
	   $data['id_rol'] = 1;
      	if (!isset($data['nombre'])) {
			$errores .= '<p>Falta el nombre</p>';
		} else if (!isset($data['username'])) {
			$errores .= '<p>Falta el username</p>';
		} else if (!isset($data['email'])) {
			$errores .= '<p>Falta el correo</p>';
		} else {
			$errores = '';
        }
        
        $user = new User();
        $user->saveUser($data);
        session_destroy();

    }
    
  	public function accessUsers($data) {
		session_start();
		$user = new User();
		$respuesta = $user-> accessUser($data['username'], $data['password']);
		if ($respuesta != false) {
			foreach ($respuesta as $r) {
				$_SESSION['id_usuario'] = $r['id'];
				$_SESSION['id_rol'] = $r['id_rol'];
			}
			if ($_SESSION['id_rol'] == 1) {
                // si el rol es 1 que me mande al dashboard
				header('Location: index.php?page=dashboard');
        die();
			} else {
                // si no que me mande al modo invitado
			 header('Location: index.php?page=blog');
        die();
			}
		}
	}


}