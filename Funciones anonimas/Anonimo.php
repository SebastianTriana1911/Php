<?php
// Las funciones anonimas funcionan para llamar una funcion sin
// necesidad de crear una clase para ello, pues PHP no soporta
// las herencias multiples por lo tanto se deberan de crear dichas
// funciones

// La variable saludar funcionara como una funcion anonima la
// cual se le pase como parametro un nombre para que lo tome a
// la hora de hacer el print que realizara cuuando se llame
$saludar = function ($nombre){
    printf("----- $nombre");
};

// Se llama la funcion anonima saludar y se le pasa como parametro
// una cadena de texto
$saludar ("Bienvenidos");
$saludar ("Llamando la funcion");

?>