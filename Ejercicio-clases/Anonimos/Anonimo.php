<?php

// La variable multiplo sera la funcion anonima que reciba
// como parametro un numero para validar si es o no es multiplo
// de 5
$multiplo = function ($numero){

    // Se realiza la validacion con el operador logico modulo "%"
    if ($numero % 5 == 0){
        echo "$numero es multiplo de 5";
    }
    elseif ($numero % 5 != 0){
        echo "$numero no es multiplo de 5";
    }
};

// Se crea una variable que reciba como valor un numero
$numero = 10;

// Se llama la funcion anonima con el nombre de la variable que la
// contiene y como parametro se le pasa una variable anteriormente creada
$multiplo ($numero);

?>