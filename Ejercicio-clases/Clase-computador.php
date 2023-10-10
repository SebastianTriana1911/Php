<?php
// Metodo para tipar cada atributo de la clase por obligacion
declare (strict_types=1);

// Metodo que retorna la fecha actual que tiene la maquina dependiendo del lugar que se pase como parametro 
date_default_timezone_set ("America/bogota");

// Se crea la Seperclase Computador
class Computador {
    private string $fabricante;
    private float $cap_memoria;
    private string $tipo_memoria;
    private string $tipo_almacenamiento;
    private string $cap_almacenamiento;
    private string $sistema_operativo;
    private string $suite_oficina;
    private string $procesador;
    private float $numero_puertos_usb;
    // Atributos que no seran participe a la hora de instanciar un objeto
    private static $fecha;
    private static $cont_objetos = 0;

    public function __construct(string $fabricante, float $cap_memoria,
    string $tipo_memoria, string $tipo_almacenamiento, string $cap_almacenamiento,
    string $sistema_operativo, string $suite_oficina, string $procesador, float $numero_puertos_usb){
        $this -> fabricante = $fabricante;
        $this -> cap_memoria = $cap_memoria;
        $this -> tipo_memoria = $tipo_memoria;
        $this -> tipo_almacenamiento = $tipo_almacenamiento;
        $this -> cap_almacenamiento = $cap_almacenamiento;
        $this -> sistema_operativo = $sistema_operativo;
        $this -> suite_oficina = $suite_oficina;
        $this -> procesador = $procesador;
        $this -> numero_puertos_usb = $numero_puertos_usb;
        // Cada que se instancie un objeto de la clase Computador o subclases de dicha clase el atributo cont_objetos
        // que es propio de la clase Computador aumentara 1
        Computador::$cont_objetos = Computador::$cont_objetos + 1;  
    }

    // Metodos Get
    public function get_fabricante(){
        return $this -> fabricante;
    }

    public function get_cap_memoria(){
        return $this -> cap_memoria;
    }

    public function get_tipo_memoria(){
        return $this -> tipo_memoria;
    }

    public function get_tipo_almacenamiento(){
        return $this -> tipo_almacenamiento;
    }

    public function get_cap_almacenamiento(){
        return $this -> cap_almacenamiento;
    }

    public function get_sistema_operativo(){
        return $this -> sistema_operativo;
    }

    public function get_suite_oficina(){
        return $this -> suite_oficina;
    }

    public function get_procesador(){
        return $this -> procesador;
    }

    public function get_numero_puertos_usb(){
        return $this->numero_puertos_usb;
    }

    // Metodos Set
    public function set_fabricante($fabricante){
        return $this -> fabricante = $fabricante;
    }

    public function set_cap_memoria($cap_memoria){
        return $this -> cap_memoria = $cap_memoria;
    }

    public function set_tipo_memoria($tipo_almacenamiento){
        return $this -> tipo_memoria = $tipo_almacenamiento;
    }

    public function set_tipo_almacenamiento($tipo_almacenamiento){
        return $this -> tipo_almacenamiento = $tipo_almacenamiento;
    }

    public function set_cap_almacenamiento($cap_almacenamiento){
        return $this -> cap_almacenamiento = $cap_almacenamiento;
    }

    public function set_sistema_operativo($sistema_operativo){
        return $this -> sistema_operativo = $sistema_operativo;
    }

    public function set_suite_oficina($suite_oficina){
        return $this -> suite_oficina = $suite_oficina;
    }

    public function set_procesador($procesador){
        return $this -> procesador = $procesador;
    }

    public function set_numero_puertos_usb($numero_puertos_usb){
        return $this->numero_puertos_usb = $numero_puertos_usb;
    }

    // Metodos estaticos, solo los puede llamar la clase que los contiene "Computador"
    public static function mostrar_fecha(){
        return 'La fecha en la que se esta llamando el metodo es: ' . date("y-m-d H:i:s");
    }

    public static function mostrar_contador(){
        // Al usar la palabra reservada self nos estamos refiriendo a que llamaremos un objeto estatico
        // que esta en la misma clase seguido de los puntos "::" que permite el acceso al objeto o
        // metodo estatico que se este llamando
        return '<br> La cantidad de objetos intanciados es de: ' . self :: $cont_objetos;
    } 

}

// Instancias de la clase Computador
// $mi_computador = new Computador ('Microsoft', 16, 'Ram', 'SSD', '2TB', 'Windows10', 'Office365', 'intel i7', 4);
// $mi_computador2 = new Computador ('Microsoft', 16, 'Ram', 'SSD', '2TB', 'Windows10', 'Office365', 'intel i7', 4);

// // Se hace la llamada a los metodos estaticos por medio de la clase que los contiene
// echo Computador::mostrar_fecha(); 
// echo Computador::mostrar_contador();
?>