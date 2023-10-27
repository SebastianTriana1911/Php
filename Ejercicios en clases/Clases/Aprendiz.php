<?php
    // Crear clases en PHP
    class Aprendiz {
        // Atributos publicos de la clase Aprendiz con diferentes tipos de datos
        public string $tipo_doc;
        public $num_documento;
        public string $nombre;
        public string $apellido;
        public string $correo;
        public int $edad;
        public bool $activo;

        // Constructor public function __construct (nombre de los atributos){}
        public function __construct(string $tipo_doc, $num_documento, string $nombre, string $apellido, string $correo, int $edad, bool $activo)
        {
            $this->tipo_doc = $tipo_doc;
            $this->num_documento = $num_documento;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->correo = $correo;
            $this->edad = $edad;
            $this->activo = $activo;
        }
    }
// Instanciar objetos
$aprendiz1 = new Aprendiz ("TI", "1013107003", "Johan Sebastian", "Triana Camacho" ,"sebas@gmail.com", 17, 1);
echo $aprendiz1->tipo_doc;
?>
