<?php
/* Declare(strict_types=1) indica al programador y al archivo que cada uno
de los atributos de la clase seran tipados y por consiguiente se debera
de crear cada uno con su tipo de dato obligatoriamente */
declare(strict_types=1);

//Crear superclase automotor
class Automotor{

    private string $marca;
    private string $modelo;
    private int $precio;

    public function __construct(string $marca, string $modelo, int $precio){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }

    public function get_marca(){
        return $this->marca;
    }

    public function get_modelo(){
        return $this->modelo;
    }

    public function get_precio(){
        return $this->precio;
    }

    public function set_marca($marca){
        $this->marca = $marca;
    }

    public function set_modelo($modelo){
        $this->modelo = $modelo;
    }

    public function set_precio($precio){
        $this->precio = $precio;
    }

    public function saludar(){
        echo 'Bienvenido, desde la SUPERCLASE Automotor <br> <br>';
    }
}

?>