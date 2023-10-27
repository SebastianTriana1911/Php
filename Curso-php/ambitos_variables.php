<?php

// Las funciones trabajan como bloques de codigo independientes lo
// que quiere decir que no podra resivir dentro de dicho bloque nada
// que venga por fuera de dicha funcion

// ------------------------------------------------------------------

// Funciones - Variable locar y variable global
$a = 10;
function variables(){
    $a = 5;
    echo $a;
}
// Segun lo anterior dicho la funcion mostrara el valor de la variable
// a pero la que se encuentra dentro de la funcion no la que se encuentra
// por fuera de esta

// ------------------------------------------------------------------

// Llamar variables locales dentro de una funcion
$a = 10;
function variables2(){
    global $a;
    echo $a;
}
// Utilizando la palabra reservada global podremos utilizar el valor de
// las variables que se encuentren por fuera de las funciones que 
// vayamos a hacer, en este caso se imprimira el valor que haya en la
// variable a que se encuentra de manera global y no local
// ------------------------------------------------------------------

// Funciones con parametros globales
$a = 10;
// La funcion variables3 esta resiviendo como parametro una variable y
// no solo su valor, como identificamos esto. Cuando la variable de un
// parametro tiene el signo &
function variables3(&$n){
    $n = $n * 5;
    echo "el resultado es $n";
}
variables3($a);
// El signo & permite que entre como parametro la variable y no su valor
// lo que significa que no cambiara un valor x si no el valor de la 
// propia variable que se pase como parametro
// ------------------------------------------------------------------



?>