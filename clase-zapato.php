<?php
class Zapato {
    private string $marca;
    private int $precio;
    private string $modelo;
    private string $color;

    public function __construct ($marca, $precio, $modelo, $color)
    {
        $this -> marca = $marca;
        $this -> precio = $precio;
        $this -> modelo = $modelo;
        $this -> color = $color;
    }

    public function get_marca ()
    {
        return
        "Marca: " . $this -> marca . "<br>";
    }

    public function get_precio ()
    {
        return
        "Precio: " . $this -> precio . "<br>";
    }

    public function get_modelo ()
    {
        return
        "Modelo: " . $this -> modelo . "<br>";
    }

    public function get_color ()
    {
        return
        "Color: " . $this -> color . "<br>";
    }

    
}

$adidas = new Zapato ("Adidas", 500000, "Super star", "Blancas con negro");

echo $adidas -> get_marca();
echo $adidas -> get_precio();
echo $adidas -> get_modelo();
echo $adidas -> get_color();

?>