<?php
// Se importa el archivo que contiene la clase padre Automotor
require_once('Automotor.php');

// Se crea la clase Camion que es subclase de Automotor
class Camion extends Automotor{

    // Atributos unicos de la clase Camion
    private int $num_ejes;
    private float $cap_carg;

    // Constructor con los atrubutos de la Superclase y Subclase
    public function __construct(string $marca, string $modelo, int $precio, int $num_ejes, float $cap_carg){

        // Se llama el contructor de la Superclase con la palabra reservada parent 
        parent::__construct($marca, $modelo, $precio);

        $this-> num_ejes = $num_ejes;
        $this-> cap_carg = $cap_carg;
    }

    public function get_num_ejes(){
        return $this->num_ejes;
    }

    public function get_cap_carga(){
        return $this->cap_carg;
    }

    public function set_num_ejes($num_ejes){
        $this->num_ejes=$num_ejes;
    }

    public function set_cap_carg($cap_carg){
        $this->cap_carg=$cap_carg;
    }
}

?>