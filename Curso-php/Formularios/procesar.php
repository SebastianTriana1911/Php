<?php

// Declaracion de variables llamando con el metodo POST el name del input
// que tiene la informacion que ingreso el usuario
$nombre = $_POST["name"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$rol = $_POST["roles"];

// Para recuperar una archivo enviado desde un formulario se debe de realizar
// con el metodo FILES en vez del metodo POST
$imagen = $_FILES["imagen"];

// Llamdo de variables 
echo "El nombre del usuario es $nombre <br> <br>";
echo "La edad del usuario es $edad <br> <br>";
echo "El sexo del usuario es $sexo <br> <br>";

// Iteracion de la varible rol, ya que el input de tipo checkbox es de 
// seleccion multiple se debe de guardar en un array para recuperar cada
// elemento ingresado
echo "Los roles del usuario son ";
foreach ($rol as $elemento){
    echo "<li>$elemento</li>";
}
echo "<br> <br>";
?>