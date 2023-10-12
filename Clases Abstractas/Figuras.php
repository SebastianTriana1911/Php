<?php

// Una clase abstracta esta hecha para ser heredada por otras. No se puede instanciar
// Las clases abstractas se usaran para estandarizar las aplicaciones
// Una clase abstracta servira de herencias a otras

// Las figuras pueden ser cuadrados, triangulos, rectangulos...
abstract class Figura {
    private $num_llamados = 1;
    private $nombres;

    public function imprimir(){
        echo "Soy un metodo de una clase abstracta <br>";
    }
}

// Escriba el codigo necesario para crear un objeto $cuadrado1:::
class Cuadrado extends Figura {
}

// Instancias de la clase Cuadrado
$cuadrado1 = new Cuadrado();
$cuadrado1 -> imprimir();

// Se crea una clase Triangulo que sera subclase de la case Figura
class Triangulo extends Figura{
    private float $altura;
    private float $base;

    // Al intanciar un objeto de la clase Triangulo sus atributos seran la
    // altura y la base de tipo flotante
    public function __construct ( float $altura, float $base){
        $this -> altura = $altura;
        $this -> base = $base;
    }

    // Metodos Get
    public function  get_altura(){
        return $this -> altura;
    }

    public function  get_base(){
        return $this -> base;
    }

    // Metodo estatico que retorne el resultado del atributo base por
    // el atributo altura dividido entre dos
    public static function resultado ($base, $altura){
        return $base * $altura / 2;
    }
}

// Instancia del objeto triangulo
$triangulo = new Triangulo (5,6);

// Imprecion de la instancia triangulo con los metodos get_base y get_altura
echo "La base del triangulo es: " . $triangulo->get_base() . "<br>";
echo "La altura del triangulo es: " . $triangulo->get_altura() . "<br>";

// Como el metodo resultado es estatico solo se podra llamar por la clase Triangulo.
// La instancia triangulo como contiene los dos dos atributos base y altura, para retornar
// solo la base y solo la altura se le emplean los metodos get, como parametros del
// metodo resultado
echo "El resultado de la base por la altura es: "
. Triangulo::resultado($triangulo->get_base(), $triangulo->get_altura());


?>