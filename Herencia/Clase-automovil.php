<?php
// Se importa el archivo Clase-automotor.php
require_once('Clase-automotor.php');

// Extends es un atributo que se utiliza cuando una clase es herencia de otra, pues asi hace dicha referencia
class Automovil extends Automotor{
    
    //Atributos de la subclase Automovil
    private string $tipo;
    private string $color;
    
    //Creando constructor completo incluyendo los atributos propios y los de la Superclase Automotor
    public function __construct(string $marca, string $modelo, int $precio, string $tipo, string $color) {
        
        //Invocando el contructor de la Superclase para acceder a sus datos
        parent::__construct($marca, $modelo, $precio);
        
        //Declarando el destino de los atributos de la subclase Automovil
        $this->tipo = $tipo;
        $this->color = $color;
    }

    //Los métodos SET se usan para asignar valores a los atributos
    public function set_tipo($tipo){
        $this->tipo=$tipo;
    }

    public function set_color($color){
        $this->color=$color;
    }

    //Con el método GET se devuelven o recuperan los datos de los aributos
    public function get_tipo(){
        return $this->tipo;
    }

    public function get_color(){
        return $this->color;
    }
}

// Se crea un objeto de la clase Automovil que hereda atributos y metodos de la clase Automotor
$automovil = new Automovil('Honda', '2015', 20000000, 'Convertible', 'Blanco');

// Se llaman a los metodos propios de la clase Automovil y los metodos de la clase Automotor
// echo 'Marca: ' . $automovil -> get_marca();
// echo '<br>Modelo: ' . $automovil -> get_modelo();
// echo '<br>Precio: ' .$automovil -> get_precio();
// echo '<br>Tipo: ' .$automovil -> get_tipo();
// echo '<br>Color: ' .$automovil -> get_color();

?>