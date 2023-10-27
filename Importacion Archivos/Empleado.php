<?php

class Empleado{
    // El acceso protected hace referencia a que solo se podra acceder a ese atributo
    // desde la clase que lo contiene o las clases que lo heredan
    protected $nombre;
    protected $fechaNacimiento;
    
    // El metodo static en los atributos hace referencia a que dicho atributo que lo
    // contenga no hara parte de la instancia de un objeto pero si es un atributo 
    // unico de la tabla padre
    public static $nacionalidad;
    public static $contador = 0;

    public function __construct($nombre, $fechaNacimiento){
        $this->nombre = $nombre;
        $this->fechaNacimiento=$fechaNacimiento;
    }

    public static function metodo_estatico(){
        echo "Soy un método estático. No necesito un objeto, me invocas desde la clase <br>";
    }

    public function metodo_no_estatico(){
        echo "Soy un método NO estático. Necesito un objeto que me invoque <br>";
    }

    public function contar(){
        echo "Conteo: " . self::$contador+=1;
        return;
    }
}

// Los metodos estaticos se llaman no por un objeto si no por la clase que la contiene
// como en este caso
Empleado::metodo_estatico();

$empleado = new Empleado ('Sebastian', '2005-11-19');
// Los metodos no estaticos de deben de llamar por algun objeto instanciado
$empleado -> metodo_no_estatico();

?>