<?php

require_once 'BaseModel.php';

class User extends BaseModel{
    public $nombre;
    public $userName;
    public $email;
    public $password;

    	public function __construct() {
		parent::__construct();
	}

	function getNombre() {
		return $this->nombre;
	}

	function getEmail() {
		return $this->email;
	}

	function getPassword() {
		return $this->password;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function setEmail($email) {
		$this->email = $email;
	}

	function setPassword($password) {
		$this->password = $password;
    }
		
		// GuardarUsuario
    function saveUser($data) {
		$db = new BaseModel();
		$insert = $db->insert('usuarios', $data);
		if ($insert == true) {
			$_SESSION['message'] = 'Registro exitoso';
		}
	}

	// Acceso Usuario
	public function accessUser($userName, $password) {
		$db = new BaseModel();
		$query = "SELECT * FROM usuarios WHERE userName = '".$userName. "' AND password = '".$password . "'";
		$respuesta = $db->consultar($query);
		if ($respuesta == true) {
			session_start();
			$_SESSION['userName'] = $userName;
		}
    }
    
}