<?php

require_once 'models/usuario.php';

class UsuarioController {
	public function login() {
    require_once('./views/includes/cabecera.php');
    require_once('login.php');
    require_once('./views/includes/pie.php');
	}

	public function registro() {
    require_once('./views/includes/cabecera.php');
    require_once('registro.php');
    require_once('./views/includes/pie.php');
	}

	public function guardarUsuario($datos) {
		$errores = '';
		if (!isset($datos['nombre'])) {
			$errores .= '<p>Falta el nombre</p>';
		} else if (!isset($datos['apodo'])) {
			$errores .= '<p>Falta el apodo</p>';
		} else if (!isset($datos['email'])) {
			$errores .= '<p>Falta el correo</p>';
		} else {
			$errores = '';
		}

		$usuario = new Usuario();
		$usuario->guardarUsuario($datos);
		session_destroy();
	}

	public function accesoUsuario($datos) {

	}
}