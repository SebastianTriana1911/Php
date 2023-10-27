<?php

// El bucle foreach nos sirve para iterar sobre los elementos que 
// contiene un array, el bucle foreach resive dos parametros, la variable
// que contenga la array que se desea iterar y como segundo parametro
// una variable la cual resiva cada elemento de la array (esta variable no
// tiene que estar declarada fuera del bucle)

// Declaracion de variables
$nombres = ["Sebastian", "Andres", "Duvan"];

// Bucle foreach solo mostrando los elementos de la array sin su indice
foreach ($nombres as $nombre) {
    echo "$nombre <br>";       
}

// Indices dentro de los bucles foreach
// Cuando se desea saber el indice en el que se encuentra un valor a la hora
// de iterar una array se puede saber asignando una nueva variable y a esta
// asignandole la variable que contiene el elemento de la array que esta 
// iterando

// Declaracion de variable de tipo array
$nombres = ["Sebastian", "Andres", "Duvan"];

// Bucle foreach primer parametro es la variable que contiene el array, segundo
// parametro es la variable que llevara los indices de los elementos del array,
// tercer parametro la variable que resivira cada elemento del array
foreach ($nombres as $indice => $nombre) {

    // Se muestra un mensaje del elemento del array seguido del indice donde se
    // encontro
    echo "$nombre estaba en el indice $indice <br>";
}
?>