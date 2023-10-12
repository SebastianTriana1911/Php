<?php
// Espacio de nombre para las clases de la empresa ABC
// No debe escribir codigo PHP antes del namespace

namespace Sena;

class Persona{
    public string $nombre;
    public string $correo;
    public static string $saludo;

    public function __construct(string $nombre, string $correo,
    string $saludo){
        $this -> nombre = $nombre;
        $this -> correo = $correo;
        self::$saludo = $saludo;
    }

    public function obtener_datos(){
        echo $this->nombre, $this->correo, self::$saludo;
    }
}

?>