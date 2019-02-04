<?php
/*Creando una clase en php

Para crear una clase en Php :
1)se crea la palabra reservada Class
2) Todos los métodos, variables, funciones tienen que llevar una nombre descriptivo.
3) La primera letra de la Clase sea Mayúscula y en singular.
4) Abrir { }
5) Definir propiedades
6) Definir métodos
PHP 
*/

class Curso 
{
    public $nombre;
    public $duracion;
    public $costo;
    public $moneda;
    public $profesor;
    public $disponible;

    // public function imprimirInfo() {
	// 		return "El nombre del curso es <strong>".$this->nombre."</strong> y quién imparte el curso es ".$this->profesor."<br />";
	// 	}

	// 	public function validaDisponibilidad() {
	// 		if ($this->disponible == true) {
	// 			return "El curso si está disponible<br />";
	// 		} else {
	// 			return "El curso no está disponible<br />";
	// 		}
	// 	}

}


$php = new Curso();
$php->nombre = 'POO en Php';
$php->duracion = '3 Sesiones';
$php->costo = 10;
$php->moneda = 'USD';
$php->profesor = 'Yesi Days';
$php->disponible = true;
//	echo $php->validaDisponibilidad();
var_dump($php);


$javascript = new Curso();
$javascript->nombre = 'Javascript desde 0';
$javascript->duracion = '6 Sesiones';
$javascript->costo = 0;
$javascript->moneda = 'USD';
$javascript->profesor = 'Alvaro Felipe';
$javascript->disponible = true;
//echo $javascript->validaDisponibilidad();
var_dump($javascript);

?>