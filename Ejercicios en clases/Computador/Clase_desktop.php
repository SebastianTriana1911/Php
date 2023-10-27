<?php
// Se importa el archivo que contiene la clase padre Computador
require_once ('Clase_computador.php');

// Se crea una clase ComputadorDesktop que sera heredara atributos y metodos de la clase Computador
class ComputadorDesktop extends Computador {
    private bool $ups;

    // Contructor con los atributos de la clase ComputadorDesktop y la superclase Computador
    public function __construct (string $fabricante, float $cap_memoria,
    string $tipo_memoria, string $tipo_almacenamiento, string $cap_almacenamiento,
    string $sistema_operativo, string $suite_oficina, string $procesador, float $numero_puertos_usb,
    bool $ups){

    // Se llama el contructor de la Superclase con la palabra reservada parent 
    parent::__construct ($fabricante, $cap_memoria, $tipo_memoria, $tipo_almacenamiento, $cap_almacenamiento,
    $sistema_operativo, $suite_oficina, $procesador, $numero_puertos_usb);

    $this -> ups = $ups;
    }

    // Metodos Get
    public function get_ups(){
        return $this -> ups;
    }

    // Metodos Set
    public function set_ups($ups){
        return $this -> ups = $ups;
    }
}

?>