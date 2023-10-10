<!-- Los metodos magicos son aquellos que se ejecutan sin que una clase o un
objeto de la case los llame, como en este caso que a la hora de instanciar un 
objeto de la clase pared automaticamente se ejecutara el mensaje que esta dentro
del constructor. Este sera nuestro metodo magico pues en ningun momento lo llamamos
pero aun asi se mostro en pantalla-->

<?php
class Pared{
    private string $materiales;

    public function __construct($materiales){
        $this->materiales= $materiales;
        // A la hora de instanciar un objeto se mostrara automaticamente en pantalla 
        // sin necesidad de llamarse - metodo magico
        echo 'Soy el Constructor. Se ejecuta automáticamente';
    }

    public function get_materiales(){
        return $this->materiales;
    }

    public function set_materiales($materiales){
        $this->materiales = $materiales;
    }

    public function saludar(){
        echo '<br>'.'Invocando un método PHP. ';
    }
}

//Declarar un objeto 
$pared_sala = new Pared('Bloque número 5, 20x20 cm');