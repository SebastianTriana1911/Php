<?php
// require_once () importa obligatoriamente una vez el archivo que
// se le pase como parametro
 
// include() importacion opcionalmente el archivo que se le pase como
// parametro, pues lo utilizara cuando sea necesario
 
// include_once() importa de manera opcional una sola vez el archivo

// require() importa obligatoriamente le archivo que se le pase 
require('Clase-empleado.php');

//Creando la instancia de Empleado
$empleado1 = new Empleado('Juan', '25-3-2000');
$empleado2 = new Empleado('Juana', '25-4-1996');
$empleado3 = new Empleado('Maritza', '20-7-1996');


//Objeto empleado invocando un método no estático clásico
$empleado1->metodo_no_estatico();

//Clase Empleado invocando a un método estático con el operador PHP ::
Empleado::metodo_estatico();

//Clase Empleado invocando y modificando su atributo estático 
Empleado::$nacionalidad = 'colombiana';
echo "Tengo nacionalidad " . Empleado::$nacionalidad.'<br>';

// El objeto empleado1 invoca 3 veces el metodo contar 
$empleado1->contar();
$empleado1->contar();
$empleado1->contar();
?>