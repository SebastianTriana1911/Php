<?php

// Crear una funcion que muestre el factorial de un numero

// Funcion seguido del nombre identificador y la variable que tomara
// como parametro
function factorial($numero){

    // Declaracion de variable
    $resultado = 1;

    // Bucle for donde la variable i itera el numero que se le pase como
    // parametro y que por cada vuelta aumente su valor en 1
    for ($i = 1; $i <= $numero ; $i++) { 

        // La variable resultado se declaro en 1 para poder multiplicarla 
        // por el valor de 1 que empieza en 1 y va aumentando segun el
        // parametro que se haya pasado como funcion
        $resultado = $resultado * $i;
    }

    // Se muestra por pantalla dicho mensaje
    echo "El factorial de $numero es $resultado";

    // Se puede retornar el valor que arroje la funcion para usarla en 
    // proximo codigo y esta seria la manera
    // return $resultado
}

// Llamado a la funcion con dicho parametro
factorial(9);

// LLamado a la funcion pero utilizando el elemento que retorna para posterior
// codigo

// $resultado = factorial(9);
// echo "El resultado del factorial es $resultado"

// A una variable se le asigna el valor que retorna la funcion para mostrar dicho
// retorno en un mensaje
?>