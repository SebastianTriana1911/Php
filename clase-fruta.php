<?php
date_default_timezone_set ("America/bogota");
class Fruta {
    private string $nombre;
    private int $precio;
    private string $codigo_barra;
    private bool $activo;

    public function __construct ($nombre, $precio, $codigo_barra, $activo)
    {
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> codigo_barra = $codigo_barra;
        $this -> activo = $activo;
    }

    // Metodos Set
    public function get_nombre ()
    {
        return $this -> nombre;
    }

    public function get_precio ()
    {
        return $this -> precio;
    }

    public function get_codigo ()
    {
        return $this -> codigo_barra;
    }

    public function get_activo ()
    {
        return $this -> activo;
    }

    public function get_fecha ()
    {
        return date("y-m-d H:i:s");
    }

    public function get_datos ()
    {
        return
        "----------------------------------------------------------------" . "<br>" . "<br>" .
        "Estos son los datos de la fruta " . $this -> nombre . " sin metodos set" . "<br>" . "<br>" .
        "Nombre: " . $this -> nombre . "<br>" .
        "Precio: " . $this -> precio . "<br>" .
        "Codigo de barras: " . $this -> codigo_barra . "<br>" .
        "Activo: " . $this -> activo;
    }

    // Metodos Set
    public function set_nombre ($nombre)
    {
        $this -> nombre = $nombre;
    }

    public function set_precio ($precio)
    {
        $this -> precio = $precio;
    }

    public function set_codigo ($codigo_barra)
    {
        $this -> codigo_barra = $codigo_barra;
    }

    public function set_activo ($activo)
    {
        $this -> activo = $activo;
    }
}

/* Objeto manzana con metodos get y set */
$manzana = new Fruta ("Manzana", 2000, "10101312", 1);

echo $manzana->get_datos () . "<br>";
echo $manzana -> get_fecha() . "<br>" . "<br>";

echo "----------------------------------------------------------------" . "<br>" . "<br>";
echo "Estos son los datos de la fruta " . $manzana -> get_nombre() . " con metodos set" . "<br>";

/* Objeto manzana con metodos set */
$manzana -> set_nombre("Manzanita");
echo "Nombre: " . $manzana -> get_nombre () . "<br>";
$manzana -> set_precio(2500);
echo "Precio: " . $manzana -> get_precio () . "<br>";
$manzana -> set_codigo("321546543");
echo "Codigo de barras: " . $manzana -> get_codigo () . "<br>";
$manzana -> set_activo(0);
if ($manzana -> get_activo() == True) {
    echo "El producto esta activo" . "<br>" . "<br>";
}
else {
    echo "El producto esta inactivo" . "<br>" . "<br>" ;
}



/* Objeto pera con metodos get y set */
$pera = new Fruta ("Pera", 2000, "1018312", 0);

echo $pera->get_datos () . "<br>" . "<br>";

echo "----------------------------------------------------------------" . "<br>" . "<br>";
echo "Estos son los datos de la fruta " . $pera -> get_nombre() . " con metodos set" . "<br>";

/* Objeto pera con metodos set */
$pera -> set_nombre("Perita");
echo "Nombre: " . $pera -> get_nombre () . "<br>";
$pera -> set_precio(2500);
echo "Precio: " . $pera -> get_precio () . "<br>";
$pera -> set_codigo("325465543");
echo "Codigo de barras: " . $pera -> get_codigo () . "<br>";
$pera -> set_activo(1);
if ($pera -> get_activo() == True) {
    echo "El producto esta activo" . "<br>" . "<br>";
}
else {
    echo "El producto esta inactivo" . "<br>" . "<br>" ;
}



/* Objeto mango con metodos get y set */
$mango = new Fruta ("Mango", 2500, "1000012", 1);

echo $mango->get_datos () . "<br>" . "<br>";

echo "----------------------------------------------------------------" . "<br>" . "<br>";
echo "Estos son los datos de la fruta " . $mango -> get_nombre() . " con metodos set" . "<br>";

/* Objeto mango con metodos set */
$mango -> set_nombre("Mangito");
echo "Nombre: " . $mango -> get_nombre () . "<br>";
$mango -> set_precio(3000);
echo "Precio: " . $mango -> get_precio () . "<br>";
$mango -> set_codigo("65543");
echo "Codigo de barras: " . $mango -> get_codigo () . "<br>";
$mango -> set_activo(0);
if ($mango -> get_activo() == True) {
    echo "El producto esta activo" . "<br>" . "<br>";
}
else {
    echo "El producto esta inactivo" . "<br>" . "<br>" ;
}



/* Objeto durazno con metodos get y set */
$durazno = new Fruta ("Durazno", 3000, "1054412", 0);

echo $durazno->get_datos () . "<br>" . "<br>";

echo "----------------------------------------------------------------" . "<br>" . "<br>";
echo "Estos son los datos de la fruta " . $durazno -> get_nombre() . " con metodos set" . "<br>";

/* Objeto durazno con metodos set */
$durazno -> set_nombre("Duraznito");
echo "Nombre: " . $durazno -> get_nombre () . "<br>";
$durazno -> set_precio(4000);
echo "Precio: " . $durazno -> get_precio () . "<br>";
$durazno -> set_codigo("47515543");
echo "Codigo de barras: " . $durazno -> get_codigo () . "<br>";
$durazno -> set_activo(1);
if ($durazno -> get_activo() == True) {
    echo "El producto esta activo" . "<br>" . "<br>";
}
else {
    echo "El producto esta inactivo" . "<br>" . "<br>" ;
}

/* Objeto banano con metodos get y set */
$banano = new Fruta ("Banano", 1500, "1478412", 1);

echo $banano->get_datos () . "<br>" . "<br>";

echo "----------------------------------------------------------------" . "<br>" . "<br>";
echo "Estos son los datos de la fruta " . $banano -> get_nombre() . " con metodos set" . "<br>";

/* Objeto banano con metodos set */
$banano -> set_nombre("Banano");
echo "Nombre: " . $banano -> get_nombre () . "<br>";
$banano -> set_precio(1000);
echo "Precio: " . $banano -> get_precio () . "<br>";
$banano -> set_codigo("00005543");
echo "Codigo de barras: " . $banano -> get_codigo () . "<br>";
$banano -> set_activo(0);
if ($banano -> get_activo() == True) {
    echo "El producto esta activo" . "<br>" . "<br>";
}
else {
    echo "El producto esta inactivo" . "<br>" . "<br>" ;
}
?>