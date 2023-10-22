<?php

// El bucle for resive 3 parametros, en el primero se debera de definir una
// variable no como en el bucle while que se debia de declarar la variable
// por fuera, como segundo parametro se debera de colocar la condicion que
// se devera de validar, y como tercer paramtro de debe de colocar la accion
// que va a tomar la variable por cada vuelta del bucle

// Declaracion de variable
$fila = 10;

// Bucle for donde se valida si la variable que se que declara con un valor en 1
// es menor o igual a la variable fila
for ($i = 1; $i <= $fila; $i += 1) { 

    // For anidado donde se valida si la variable j que es la variable declarada en
    // este for es menor o igual a la variable i del for principal, este for anidado
    // iterara hasta ser igual al valor de la variable i
    for ($j=1; $j <= $i ; $j += 1) { 

        // Se muestra por pantalla un mensaje
        echo "*";
    }

    // Para que cada iteracion renga su linea se manda un mensaje con un br adentro
    echo "<br>";
}
