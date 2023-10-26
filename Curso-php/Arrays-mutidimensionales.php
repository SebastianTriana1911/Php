<?php

// Las array multidimencionales son arrays que se componen de mas
// arrays con diferentes elementos adentro, donde cada array es un
// indice dentro del array principal
$datos = [
    [
        "nombre" => "Sebastian",
        "edad" => 17,
        "apellido" => "Triana",
        "direccion" => [
            "pais" => "Colombia",
            "ciudad" => "Soacha"
        ]
    ],

    [
        "nombre" => "Andres",
        "edad" => 17,
        "apellido" => "Triana"
    ],

    [
        "nombre" => "Carlos",
        "edad" => 17,
        "apellido" => "Triana"
    ],
];

// Para llamar algun elemento de estos tipos de array se debe decir
// en que indice se encuentra el array que se desea llamar seguido
// del indice del elemento al que deseamos ver su valor 
echo $datos[0]["nombre"];

// Accediendo a otro indice de otro array
echo $datos[0]["direccion"]["pais"];

// Iterar todos los array pero solo queriendo tener el valor de lo que
//se encuentre en el indice nombre
foreach ($datos as $nombre){
    echo $nombre["nombre"]."<br>";
    echo $nombre["edad"]."<br>";
    echo $nombre["apellido"]."<br>";
    echo "<hr>";
}
?>