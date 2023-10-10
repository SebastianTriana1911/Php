<?php

$numero_1 = $_POST["numero-1"];
$numero_2 = $_POST["numero-2"];
$operador = $_POST["operaciones"];
$resultado = 0;

echo "El primer numero que ingreso fue: " . $numero_1 . "<br>";
echo "El segundo numero que ingreso fue: " . $numero_2 . "<br>";

if ($operador == "suma"){
    $resultado = "La suma entre los operadores es: " . $numero_1 + $numero_2;
}

elseif ($operador == "resta"){
    $resultado = "La resta entre los operadores es: " . $numero_1 - $numero_2;
}

elseif ($operador == "multiplicacion"){
    $resultado = "La multiplicacion entre los operadores es: " . $numero_1 * $numero_2;
}

elseif ($operador == "division"){
    $resultado = "La division entre los operadores es: " . $numero_1 / $numero_2;
}

echo $resultado;
?>