<?php
// Mostrar en pantalla un texto

echo ("MUESTRA DE TEXTO" . "<br>");
echo 'Trabajando php';

// Variables en php
/* Al asignar una variable se debera colocar el signo
peso y despues el valor de la variable */

$nombre = "Sebastian";
$edad = 17;
$numero = 7;
$activo = True;

/* El punto "." permite concatenar diferentes variables
o lo que se desee ingresar, Si se desea que dichas
concatenaciones tengan un salto de linea se puede usar
la etiqueta br que se usa en html */

echo ("<br>" . "<br>" . "Hola php" . "<br>");
echo ("Valor de variables" . "<br>");
echo ($nombre . "<br>" . $edad . "<br>");

// Ciclos en php - if

if ($edad >= $numero){
    echo ("Edad es mayor a numero");
}
else {echo ("numero es mayor a la edad");
}

?>