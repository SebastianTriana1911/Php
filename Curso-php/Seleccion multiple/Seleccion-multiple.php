<?php
// switch: Switch funciona para valinar un innumero de condiciones
// a la vez, funciona como las condicionales solo que sera un poco
// mas legible el codigo utilizando dicha estructura. Dentro de cada
// condicion se podra implementar el codigo que nosotros queramos que
// el programa haga cuando la validacion sea verdadera

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$operacion = $_POST["operacion"];

switch ($operacion){
    case "Sumar":
        $resultado = $numero1 + $numero2;
        echo "El resutado es $resultado"; 
        break;
    case "Restar":
        $resultado = $numero1 - $numero2;
        echo "El resutado es $resultado"; 
        break;
    case "Multiplicar":
        $resultado = $numero1 * $numero2;
        echo "El resutado es $resultado"; 
        break;
    case "Dividir":
        $resultado = $numero1 / $numero2;
        echo "El resutado es $resultado"; 
        break;
    default:
        echo "Lo que ingreso no es valido";
        break;
};

?>

