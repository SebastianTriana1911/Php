<?php

// Array con diferentes elementos
$array = [1,2,3,4,5];

// Llamar un elemento en especifico segun su indice
echo $array[1];

// Agregar un elemento en el ultimo indice del array
$array[] = 0;

// Otras formas de daclarar un array
$array2[] = 1;
$array2[] = 2;
$array2[] = 3;

// Array con diferentes tipos de datos
$array3 = ["hola", 1, True, "sebas"];

// En PHP los indices no solo pueden ser numeros que empiezan desde
// la posicion 0, si se desea se pueden llamar los indices como uno
// quiera y de dicha manera se puede llamar el elemento que correspona
// a ese indice, esto es muy practico a la hora de trabajar con bases de
// datos pues al llamar un indice como un campo de una tabla se llamara
// dicha informacion de una manera mas facil

$datos = [
    "nombre" => "Sebastian",
    "edad" => 17,
    "apellido" => "Triana"
];

echo $datos["nombre"];

?>