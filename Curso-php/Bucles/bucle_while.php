<?php
// Declaracion de variables
$numero = 1;

// Bucle while que resive como parametro una condicion  que debe de ser
// verdadera para que entre al bucle y cuando esta sea falsa se detendra
while ($numero < 5){

    // Mensaje por cada vez que entre al bucle
    echo "El bucle va en la vuelta $numero <br>";

    // Variable declarada se aumentara un valor en una unidad por cada vuelta
    $numero = $numero + 1; 
};
?>