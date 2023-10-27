<?php

// Bucle for con sentencia break
// Esta sentencia permitira salirse del bucle cuando una
// condicional se cumpla
for ($i=1; $i <=10 ; $i++) {
    echo "Numero $i";
    if ($i == 5){
        break;
    };
}

// Bucle for con sentencia continue
// Esta sentencia permitira seguir el bucle pero excluyendo
// el elemento en el que vaya cuando se le pase dicha sentencia
for ($i=1; $i <= 10 ; $i++){
    echo "Numero $i <br>";
    if ($i == 5){
        continue;
    };
}
?>