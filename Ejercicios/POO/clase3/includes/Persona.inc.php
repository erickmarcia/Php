<?php

trait Compra{
    private $compra;
    function validarCompra(){
        return "Compra exitosa";
    }
}


/*Herencia:
Esta sera una super clase la cual heredara a las siguientes clases.
La herencia nos permite reutilizar lo que ya definimos anteriomente, lo que nos permite no volver a imprimir lo que 
ya escribimos anteriormente.
*/
class Persona{

    // #Para poder utilizar el traits y poder heredercelos a las demas clases tendremos que ponerlo en la super clase
    // anteponiendo la palabra reservada use.
    use Compra; #Podemos agregar más traits separándolos por comas.

    #Constant
    // Con la palabra reservada Const, creamos una constante
    const MONEDA = 'USD';

    public $nombre;
    public $apellido;
    public $email;

    public function __construct($nombre,$apellido,$email)
    {
        $this->nombre =$nombre;
        $this->apellido=$apellido;
        $this->email=$email;

        /*Creamos una función valida Nombre y le pasamos el nombre*/
        $this->validaNombre($this->nombre);

          #Manejo de Excepciones
	        /*
				try { //Intentar, es decir, tatar de hacer algo
					//Código podría causar una excepción o un error

				} catch (Exception $e) {
					//Código que se ejecuta si hay una excepción
					//Si algo no puedes hacer entonces captúrame.
				}
       		*/

		// try {
        //     if( empty ($this->nombre))
        //     {
        //         throw new Exception("Debes Ingresar tu nombre");
        //     }
        //     else{
        //         $this->nombre = $nombre;
        //     }
        // }
        // catch (Exception $e)
        // {
        //  echo $e->getMessage();
        // }

        $this->correoValido($this->email);
    }

    public function validaNombre($nombre)
    {

    }

    public function correoValido($email)
    {
        // Expresiones regulares,es una expresión o un conjunto de caracteres que 
        // debido a como se van cumpliendo algo es valido o no
        // php ya tiene filtro definidos que funcionan como las expresiones regulares
        #filter_var
        #FILTER_NOMBRE_VALIDACION
        try {
            #nombre@dominio.termininacion
            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false)
            {
                throw new Exception ('Correo no válido');
            }
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    public function bienvenida(){
        $this->validaNombre($this->nombre);
        return "Bienvenido {$this->nombre} a EDteam";
        // return "Bienvenido ".$this->nombre." a EDteam";
    }

    // Polimorfismo
    // Con solo agregar la palabra reservada final a una function, no vamos a poder sobreescribir  
    // final public function despedida()
    public function despedida(){
        return "Gracias por Visitarnos, Hasta pronto {$this->nombre}";
    }

    }

?>