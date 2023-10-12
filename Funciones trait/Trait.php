<?php
trait mensaje {
    public function mensaje_bienvenida(){
        echo "Hola yo soy el trait";
    }
}

class Bienvenida {
    use mensaje;
}

$objeto = new Bienvenida ();
$objeto -> mensaje_bienvenida();

?>