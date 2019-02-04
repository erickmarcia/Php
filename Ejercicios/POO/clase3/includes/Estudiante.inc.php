<?php

/*Hereda o extiende
 Para heredar necesitamos crear una constructor.

*/
class Estudiante extends Persona
{
    public function __construct($nombre, $apellido, $email){
        parent::__construct($nombre,$apellido,$email);
    }

#Polimorfismo: es una sobreescritura de la información. o tiene mas de una forma de interacción.
// por ejemplo: que el saludo sea de una forma para el estudiante y de otra para el profesor
#socreescribimos
    public function bienvenida(){
        return "Bienvenido {$this->nombre}, tenemos nuevos cursos para ti";
    }

    // public function despedida(){
    //     return "Adios";
    // }
}

?>