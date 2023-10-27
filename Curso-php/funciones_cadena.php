<?php
// Alguno de los metodos ya definidos de PHP para la
// lectura de los strings son las siguientes:

//-----------------------------------------------------------------------

// strlen (variable): Esta funcion nos devuelve la cantidad de
// bits que contiene una cadena de texto
$cadena = "abcdefgd";
$cadena2 = "Hola mundo";

echo strlen($cadena);

//-----------------------------------------------------------------------

// mb_strlen(variable): Esta funcion nos devuelve la cantidad
// de elementos que contiene una cadena de texto sin importar
// la cantidad de bits de cada elemento
echo mb_strlen($cadena);

//-----------------------------------------------------------------------

// strpos(variable, elemento): Esta funcion se le debe de pasar
// dos parametros, el primero es la variable que contiene la
// cadena de texto y como segundo parametro el elemento dentro
// de la cadena de texto que se desea de saber la posicion en la
// que se encuentra buscando de izquierda a derecha
echo strpos ($cadena,"d");

//-----------------------------------------------------------------------

// strrpos (variable, elemento): Esta funcion realiza lo mismo que
// la anterior la diferencia es que en vez de buscar el primer
// elemento de izquiera a derecha lo buscara de derecha a izquierda
echo strrpos ($cadena,"d");

//-----------------------------------------------------------------------

// str_contains(variable, elemento): Esta funcion nos ayudara a saber
// si una cadena de texto se encuentra dentro de un string si es el
// caso retornara 1 y si no retornara no, ya que retorna valores booleano

// Operadores ternarios
// Cuando una funcion retorna un tipo de dato booleano podremos definir lo
// que se desea que se muestre si el valor es verdadero o si el valor es
// falso. Cuando es verdadero se debe de colocar un signo de pregunta (?)
// seguido de lo que se desea que se muestre y si es falso seria con dos
// puntos (:)
echo str_contains ($cadena2,"mundo") ? "Se encontro" : "No se encontro";

//-----------------------------------------------------------------------

// str_stars_with(variable,elemento): Esta funcion busca si el segundo
// parametro que se envio se encuentra en la primera posicion de la cadena
// de texto

echo str_starts_with ($cadena2,"Hola") ? "Se encontro" : "No se encontro";

//-----------------------------------------------------------------------

// str_ends_with(variable,elemento): Esta funcion busca si el segundo
// parametro que se envio se encuentra en la ultima posicion de la cadena
// de texto

echo str_ends_with ($cadena2,"mundo") ? "Se encontro" : "No se encontro";

//------------------------------------------------------------------------

// strtolower(variable): Esta funcion convierte toda la cadena de texto en
// minuscula

echo strtolower($cadena2);

//------------------------------------------------------------------------

// strtoupper(variable): Esta funcion convierte toda la cadena de texto en
// mayuscula

echo strtoupper($cadena2);

//------------------------------------------------------------------------

// ucfirst(variable): Esta funcion pone la primera letra de la cadena de una
// cadena de texto en mayuscula

echo ucfirst($cadena2);

//-------------------------------------------------------------------------

// ucwords(variable): Esta funcion convierte la primera letra de cada palabra en
// mayuscula dentro de una cadena de texto

echo ucwords($cadena2);

//-------------------------------------------------------------------------

?>
