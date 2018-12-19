<?php

	/*

		class NombreDeMiClase {

			* Definir nuestras propiedades

			* Definir nuestros métodos

		}

	*/

	class Curso {
		public $nombre;
		public $duracion;
		public $costo;
		public $moneda;
		public $profesor;
		public $disponible;

		public function imprimirInfo() {
			return "El nombre del curso es <strong>".$this->nombre."</strong> y quién imparte el curso es ".$this->profesor."<br />";
		}

		public function validaDisponibilidad() {
			if ($this->disponible == true) {
				return "El curso si está disponible<br />";
			} else {
				return "El curso no está disponible<br />";
			}
		}


	}

	$php = new Curso();
	$php->nombre = 'POO en PHP';
	$php->duracion = '3 sesiones';
	$php->moneda = 'USD';
	$php->profesor = 'Yesi Days';
	$php->disponible = false;
	$php->dia = 'Lunes';
	//echo $php->imprimirInfo();
	echo $php->validaDisponibilidad();

	var_dump($php);

	$javascript = new Curso(); //Instancia
	$javascript->nombre = 'Javascript desde 0';
	$javascript->duracion = '6 sesiones';
	$javascript->costo = 0;
	$javascript->moneda = 'USD';
	$javascript->profesor = 'Álvaro Felipe';
	$javascript->disponible = true;
	//echo $javascript->imprimirInfo();
	echo $javascript->validaDisponibilidad();

	var_dump($javascript);




?>