<?php

	trait Compra {
		private $compra;
		function validarCompra() {
			return "Compra exitosa";
		}
	}

	class Persona {

		use Compra; #Podemos agregar más traits separándolos por comas.

		const MONEDA = 'USD';

		public $nombre;
		public $apellido;
		public $email;

		public function __construct($nombre, $apellido, $email) {

			$this->nombre = $nombre;
       		$this->apellido = $apellido;
       		$this->email = $email;

       		$this->correoValido($this->email);

       		/*
				try { //Intentar, es decir, tatar de hacer algo
					//Código podría causar una excepción o un error

				} catch (Exception $e) {
					//Código que se ejecuta si hay una excepción
					//Si algo no puedes hacer entonces captúrame.
				}
       		*/

			/*try {
				if ( empty($this->nombre) ) {
					throw new Exception("Debes ingresar tu nombre");
				} else {
					$this->nombre = $nombre;
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}*/

		}

		public function validaNombre($nombre) {

		}

		public function correoValido($email) {
			#filter_var
			#FILTER_NOMBRE_VALIDACION

			try {
				#nombre@dominio.terminacion
				if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
					#229292, hola mundo, silvercorp@.com
					throw new Exception('Correo no válido');
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		public function bienvenida() {
			#$this->validaNombre($this->nombre);
   			return "Bienvenido {$this->nombre} a Ed Team";
   			#return "Bienvenido ".$this->nombre." a Ed Team";
   		}

   		final public function despedida() {
   			return "Hasta pronto {$this->nombre}";
   		}


	}


?>