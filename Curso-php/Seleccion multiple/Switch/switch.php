<?php
// switch: Switch funciona para valinar un innumero de condiciones
// a la vez, funciona como las condicionales solo que sera un poco
// mas legible el codigo utilizando dicha estructura. Dentro de cada
// condicion se podra implementar el codigo que nosotros queramos que
// el programa haga cuando la validacion sea verdadera

// match: Match funciona de la misma manera que el switch solo que match
// podra generar unicamente una linea de codigo y no bloques como lo realiza
// switch, por lo general se utiliza la funcion match cuando se desea validar
// una condicion y si dicha condicion es verdadera se muestre unicamente un
// mensaje por pantalla

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$operacion = $_POST["operacion"];

// Se hace la validacion si la variable cumple alguno de los casos
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

    // default permite que cuando no se cumpla ninguna de las condiciones
    // anteriores se ejecute el bloque de codigo que hay dentro de este
    default:
        echo "Lo que ingreso no es valido";
        break;
};

// Se utiliza la palabra reservada echo para que muestre los mensajes 
// correspondiente segun la validacion de la variable que se pasa como
// parametro
echo match ($operacion) {

    // Con la funcion match ya no se debe colocar el case si no simplemente
    // la condicion seguido del la flecha => para hacer referencia al mensaje
    // que se desea que se muestre cuando dicha condicion es verdadera
    "Sumar" => "El resultado es ".$numero1 + $numero2,
    "Restar"=> "El resultado es ".$numero1 - $numero2,
    "Multiplicar" => "El resultado es ".$numero1 * $numero2,
    "Dividir" => "El resultado es ".$numero1 / $numero2,
    default => "Lo que usted ingreso es inequivoco"
}

?>

