<?php
// -------------------------------------------------------

// Asignarle a variables cada uno de los indices de un array

// list(): List es una funcion que resive como parametros
// un grupo de variables que se le asignaran el valor de
// los indices de un array

$array = ["sebas", 17, "soacha"];
list ($a, $b, $c) = $array;
echo $a;
echo $b;

// -------------------------------------------------------

// Llenar un array con una cantidad de numeros especificos

// range(): Range es una funcion que inserta numeros desde
// un numero hasta otro segun los que se le pasen como 
// parametro y los agrega en un array
$arrys_range = range (2,5);
var_dump($arrys_range);

// -------------------------------------------------------

// Buscar un elemento dentro de un array

// in_range(): Esta funcion nos dira por un tipo de dato
// booleano si un elemento se encuentra en un array, como
// parametros se ingresa el elemento que se desea que busque
// y como segundo parametro el array en el que desea que busque
// dicho elemento
if(in_array("soacha", $array)){
    echo "se encontro";
}else {
    echo ("no se encontro");
}

// -------------------------------------------------------

// Eliminar elementos de un array

// unset(): Esta funcion nos permite eliminar algun elemento
// de un array indicando su indice, si no se le asigna el 
// indice a dicha funcion se borrara todo el array
unset($array[1]);
echo var_dump($array);
?>