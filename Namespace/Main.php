<?php

require ("Clase1.php");
$persona1 = new Abc\Persona ("JAIRO PERALTA", "jairo@abc", "buenos dias");
echo "imprimiendo datos de la clase Persona en el espacio de nombres Abc <br>";
echo "Nombres: $persona1->nombre <br>";
echo "Correo: $persona1->correo <br>";
echo "Saludo: " . Abc\Persona::$saludo . "<br>";

require ("Clase2.php");
$persona1 = new Sena\Persona("JAIRO PERALTA", "jairo@abc", "buenos dias");
echo "imprimiendo datos de la clase Persona en el espacio de nombres Abc <br>";
echo "Nombres: $persona1->nombre <br>";
echo "Correo: $persona1->correo <br>";
echo "Saludo: " . Sena\Persona::$saludo . "<br>"

?>