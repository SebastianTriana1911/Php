<?php
/* ARREGLOS */

/* Se le asigna a una variable un array que tendra 5 elementos */
$arreglo = array (1,2,3,4,5);

/* print_r servira para mostrar en el navegador toda variable que
sea un arreglo lo mostrara con la posicion y el valor que haya en
dicha posicion*/
print_r ($arreglo);
echo "<br>";

/* var_dump nos mostrara toda la informacion que tenga el array.
Mostrara la cantidad de elementos que este contiene, la posicion,
el valor y el tipo de dato del valor*/
var_dump($arreglo);
echo "<br>";

/* foreach nos permitira recorrer el arreglo ya
creado mostrandonos unicamente los elementos que este
contiene */
foreach ($arreglo as $a)
    echo $a;
echo "<br>";

/* Para insertar datos a un array vacio se debera de llamar a la variable
que contenga el arreglo seguido de unos corchetes el cual indica la posicion
en la que hira el valor dentro del arreglo y seguido de los corchetes hira
su valor */
$arreglo2 = array ();
$arreglo2 [] = "Dato 1";
$arreglo2 [] = "Dato 2";
$arreglo2 [] = "Dato 3";
/* Si se desea insertar un elemento a una array en una posicion que ya cuante
con un elemento*/
$arreglo2 [0] = "Dato 4";

foreach ($arreglo2 as $b)
    echo $b;

?>