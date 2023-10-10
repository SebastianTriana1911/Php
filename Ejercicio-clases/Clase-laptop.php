<?php
// Se importa el archivo que contiene la clase padre Computador
require_once ('Clase-computador.php');

// Se crea una clase ComputadorLaptop que sera heredara atributos y metodos de la clase Computador
class ComputadorLaptop extends Computador{
    private bool $tactil;
    private float $pot_bateria;

    // Contructor con los atributos de la clase ComputadorLaptop y la superclase Computador
    public function __construct(string $fabricante, float $cap_memoria, string $tipo_memoria,
    string $tipo_almacenamiento, string $cap_almacenamiento, string $sistema_operativo,
    string $suite_oficina, string $procesador, float $numero_puertos_usb, bool $tactil,
    float $pot_bateria){

        // Se llama el contructor de la Superclase con la palabra reservada parent 
        parent::__construct($fabricante, $cap_memoria, $tipo_memoria, $tipo_almacenamiento, $cap_almacenamiento,
        $sistema_operativo, $suite_oficina, $procesador, $numero_puertos_usb);
        
        $this -> tactil = $tactil;
        $this -> pot_bateria = $pot_bateria;
    }

    // Metodos Get
    public function get_tactil(){
        return $this -> tactil;
    }
    
    public function get_pot_bateria(){
        return $this -> pot_bateria;
    }

    // Metodos Set
    public function set_tactil($tactil){
        return $this -> tactil = $tactil;
    }

    public function set_pot_bateria($pot_bateria){
        return $this -> pot_bateria = $pot_bateria;
    }

}

// Instancia de la clase
$mi_laptop = new ComputadorLaptop ('Microsoft', 16, 'Ram', 'SSD', '2TB', 'Windows10', 'Office365', 'intel i7', 4, 1, 2.5);
echo $mi_laptop -> get_tactil();

?>