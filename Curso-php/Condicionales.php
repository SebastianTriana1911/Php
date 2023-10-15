<?php
// Condicionales con if

$a = 1;
$b = 2;

echo "Condicionales en php <br>";

// Esta condicion se va a ejecutar ya que la condicion que
// esta dentro de los parentecis es verdadera
if ($a <= $b ){
    echo "Se ejecuto la condicional if <br>";
}

// Condicionales else
$a = 2;
$b = 1;

// Con la condicion else le estamos diciendo al programa que nos
// ejecuto la linea de codigo que contiene else cuando no se cumpla
// la condicion del if
if ($a <= $b ){
    echo "Se ejecuto la condicional if";
}else {
    echo "Se ejecuto la condicion else <br>";
}

// Condicionales elseif
$a = 2;
$b = 2;

// Con la condicion elseif me esta permitiendo validar mas de una
// condicion, pues yo le puedo preguntar cuantas condiciones yo quiera
// para que me las valide y si en caso ninguna condicion es verdadera
// me ejecute lo que se encuentra en la condicional else
if ($a < $b ){
    echo "Se ejecuto la condicional if";
}elseif ($a > $b){
    echo "Se ejecuto la condicional elseif 1";
}elseif ($a == $b){
    echo "Se ejecuto la condicional elseif 2";
}else{
    echo "Se ejecuto la condicion else <br>";
}

?>