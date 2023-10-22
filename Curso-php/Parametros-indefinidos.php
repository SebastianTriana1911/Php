<?php

// Funcion con una cantidad de parametros indefinida: Cuando no sabemos cuantos
// parametros utilizara nuestra funcion le asignaremos 3 puntos (...) seguido de
// una variable. PHP convertira dicha variable en un array lo que significa que
// deberemos iterar dicha array para conseguir el resultado que deseamos
function concatenar (...$palabras){

    // Declaracion de variable, string vacio
    $resultado = "";

    // Iteracion del array
    foreach ($palabras as $palabra) {

        // Concatenacion entre la variable resultado y la variable que contiene
        // cada elemento del array
        $resultado = $resultado . $palabra . " ";
    }

    // Se retorna la variable resultado 
    return $resultado;
}

// Variable se le asigna la funcion concatenar con los parametros indefinidos
$resultado = concatenar("hola", "como", "estas", "me", "llamo", "Sebastian");

// Se muestra por pantalla contenido de la variable
echo $resultado;
?>