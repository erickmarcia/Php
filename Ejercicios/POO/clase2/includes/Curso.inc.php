<?php

/*En las interface declaramos las funciones.
las Funciones siempre son publicas */

	interface Requerimiento {
		public function asignarRequerimiento($listado);
		public function obtenerRequerimiento();
	}

	interface Conocimiento {
		public function asignarConocimiento($listado);
		public function obtenerConocimiento();
	}

/*Para Implementar una interface en una case se ocupara la palabra reservada implements
seguido de las interface a implementar */

	class Curso implements Requerimiento, Conocimiento {

    private $titulo;
    private $profesor;
    private $duracion;
    private $costo;
    private $disponible;
    /* Propiedades estáticas
    para crear un atributo estático
    se utiliza la palabra reservada static 
    Se puede acceder a ella, mediante el operador de resolución de ambito.
    que se reprecenta por lo :: anteponiendo la palabra reservada self
*/

    public static $moneda = 'USD';
    public static $bienvenida = 'Bienvenida a mi Curso:';
    
    /*Metodo Magico es uno de los mas importante, 
    ayuda a invocar cuando creamos una nueva instancia de clase.
    No manda ninguna devolucion, si no solamente solo permite poder asignarles los atributos como
    $curso->titulo = "Titulo";
    sin necesidad de asignarla con this, mejor se pasa como parametro
    Su funcionalidad es que mediante los parametros nos permita agregar los atributos, directamente a los
    atributos privados.
     sin esto todo se haria desde la vista apuntando de manera de que cada instancia se le asignaba varias veces.
     podiendo
    */
    /*Creamos nuestro Contructor*/
    public function __cosdtruct($titulo,$profesor,$duracion,$costo,$disponible)
    {
        $this->titulo = $titulo;
        $this->profesor = $profesor;
        $this->duracion = $duracion;
        $this->costo = $costo;
        $this->disponible = $disponible;
    }

    /*Encapsulación*/
    /*Se usa cuando trabajamos con objetos, un concepto muy importante.
    en un mecanismo o forma que permite organizar los datos y organizar nuestro metodos de
    una estructura, evitando el acceso a datos por cualquier medio que no sea uno que no hemos
    especificado.
    nos ayuda en la integridad de los datos, no agregando datos que el objeto no lo permite 
    otra manera que se le conoce es "ocultacion de la información."
    
    */
    #Encapsulación
    #Getter -- Obtener Datos
    #Setter -- Para Setear o Asignar datos 

    #Getter
    public function obtenerTitulo(){
        return $this->titulo;
    }
    #Getter
    public function obtenerProfesor(){
        return $this->profesor;
    }

    #Setter
    public function asignarTitulo($titulo){
        $this->titulo = $titulo;
    }
    

    #Interface ->interface -> implements
    /* En POO, nos permite agrupar un conjunto de declaraciones
    sin especificar el tipo de retorno, el nombr ey los argumentos.
    se define en una misma clase.
    Se puede usar interface multiple pero no herencia multiple.
    Las interfaces no pueden definir atributos, solo una función con 2 parametros.
    solo permite declarar los metodos, pero no permite ni el que ni el como acerlo.
    no se pueden llamar dela misma manera de una clase.
    Podemos definir cuales son los metodos necesarios para que se pueda definir en una clase
    Interface ->interface -> implements
    */

    #Implementar las funciones de esas interfaces.
    public function asignarRequerimiento($listado){
        $this->listado = $listado;
    }
    public function obtenerRequerimiento()
    {
     if(!empty($this->listado))
     {
         foreach($this->listado as $lista)
         {
             echo "<p>".$lista."</p>";
         }
     }
    }

    public function asignarConocimiento($listado){

    }
	public function obtenerConocimiento() {}


        /*Metodos Estático
        como es un atributo estático lo puedo regresar con return
        La palabra reservada self, se trata de la asignación de la variable
        que esta llamando destro de la misma clase o dentro de la clase padre.
        se utiliza para acceder a los métodos estáticos.
        :: tambien funciona para poder acceder a nuestras variables estáticas.
        desde el index.php
        echo Curso::$moneda;
        
        echo Curso::$bienvenida."<br/>";
        echo Curso::obtenerDenominacion();
        */
		static function obtenerDenominacion(){
         return self::$moneda;
        }

		static function bienvenida() {
			return self::$bienvenida;
		}

/* Destructores: método mágico de Php para crear un destructor 
tiene la misma palabra reservada public function __destruct() 
no lleva parámetros. 
lo destruye hasta que genera toda la lógica de negocio y luego libera la memoria.
 Con una aplicación grande se necesita crear un destructor
*/
//    public function __destruct(){
//     echo "Destruyendo ".$this->titulo."<br/>";
//    }

/*Propiedades estáticas
*/



/*Herencia en POO */



}


?>

