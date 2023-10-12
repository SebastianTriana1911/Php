<?php
// Aplicando un ALIAS al namespace con la palabra reservada "use":

require ("Clase2.php");

use Sena as S;

$persona1 = new S\Persona("Rodrigo", "jairo@aabc", "Buenos dias");
echo "imprimiendo datos de la clase Persona en el espacio de nombres Sena <br>";
echo "Nombres: $persona1->nombre <br>";
echo "Correo: $persona1->correo <br>";
echo "Saludo: " . Sena\Persona::$saludo . "<br>"
?>