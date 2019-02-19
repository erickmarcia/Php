<?php
require_once 'BaseModel.php';

class User extends BaseModel {
    public $name;
    public $username;
    public $email;
    public $password;

   	public function __construct() {
		parent::__construct();
	}

    //  Obtener
     function getName(){
         return $this->name;
     }

     function getEmail(){
         return $this->email;
     }
     
     function getPassword(){
         return $this->password;
     }

     function getUsername(){
         return $this->username;
     }
 
    //  Asignar
     function setName($name){
         $this->$name= $name;
     }

     function setEmail($email){
         $this->email = $email;
     }

     function setPassword($password){
         $this->password = $password;
     }

     function setUserName($username){
         $this->userName = $username;
     }

    //  guardarusuario
     function saveUser($data)
     {
        $db = new BaseModel();
        $datos['id_rol'] = 2;
        $insert = $db->insert('usuarios',$data);
        if($insert == true)
        {
            $_SESSION['message'] = 'Registro Exitoso';
        }     
     }

    //  AccesoUsuario
        public function accessUser($username, $password) {
		$db = new BaseModel();
		$query = "SELECT * FROM usuarios WHERE username = '".$username. "' AND password = '".$password . "'";
		return $respuesta = $db->queryRegistro($query);
	}

}
