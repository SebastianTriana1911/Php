<?php
class Docente {
    private string $tipo_doc;
    private string $num_documento;

    public function __construct($tipo_doc, $num_documento)
    {
        $this -> tipo_doc = $tipo_doc;
        $this -> num_documento = $num_documento;
    }

    // Metodos get
    public function get_tipo_doc ()
    {
        return $this -> tipo_doc;
    }
    public function get_num_documento()
    {
        return $this -> num_documento;
    }
    public function get_datos_completos()
    {
        return $this -> tipo_doc . $this -> num_documento;
    }

    // Metodos set
    public function set_tipo_documento ($tipo_doc)
    {
        $this -> tipo_doc = $tipo_doc;
    }
}

// Instancia de objeto docente
$docente = new Docente ("CC", 1013107003);

/* Al objeto docente se le pasan los metodos get para mostrar los
atributos que son privados */
echo $docente -> get_tipo_doc() . "<br>";
echo $docente -> get_num_documento() . "<br>";
echo $docente -> get_tipo_doc() . $docente -> get_num_documento();

/* Al objeto docente se le pasa el metodo set para actualizar los
datos que estan en los atributos de la clase */
echo $docente -> set_tipo_documento("TI") . "<br>";
echo $docente -> get_datos_completos();
