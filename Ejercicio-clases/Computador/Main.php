<?php

// Se importa la clase Computador
require_once('Clase-computador.php');

// Instancia de la clase Computador
$mi_computador = new Computador ('Microsoft', 16, 'Ram', 'SSD', '2TB', 'Windows10', 'Office365', 'intel i7', 4);

// Se llaman todos los metodos propios de la clase Computador
echo '------------------------------------------ <br>';
echo 'Esta es la instancia mi_computador de la clase Computador <br> <br>';
echo 'Nombre de la fabrica: ' . $mi_computador -> get_fabricante() . '<br>';
echo 'Capacidad de memoria: ' . $mi_computador -> get_cap_memoria() . '<br>';
echo 'Tipo de memoria: ' . $mi_computador -> get_tipo_memoria() . '<br>';
echo 'Tipo de almacenamiento: ' . $mi_computador -> get_tipo_almacenamiento() . '<br>';
echo 'Capacidad de almacenamiento: ' . $mi_computador -> get_cap_almacenamiento() . '<br>';
echo 'Sistema operativo: ' . $mi_computador -> get_sistema_operativo() . '<br>';
echo 'Suite_oficina: ' . $mi_computador -> get_suite_oficina() . '<br>';
echo 'Procesador: ' . $mi_computador -> get_procesador() . '<br>';
echo 'Numero de puertos USB: ' . $mi_computador -> get_numero_puertos_usb() . '<br>' ;
echo '------------------------------------------ <br> <br> <br>';



// Se importa la clase Laptop que es subclase de la superclase Computador
require_once('Clase-laptop.php');

// Instancia de la clase ComputadorLaptop
$mi_laptop = new ComputadorLaptop ('Microsoft', 16, 'Ram', 'SSD', '2TB', 'Windows10', 'Office365', 'intel i7', 4, 0, 2.5);

// Se llaman todos los metodos propios de la clase ComputadorLaptop y los que herede de la superclase Computador
echo '------------------------------------------ <br>';
echo 'Esta es la instancia mi_laptop de la clase Computador Laptop <br> <br>';
echo 'Nombre de la fabrica: ' . $mi_laptop -> get_fabricante() . '<br>';
echo 'Capacidad de memoria: ' . $mi_laptop -> get_cap_memoria() . '<br>';
echo 'Tipo de memoria: ' . $mi_laptop -> get_tipo_memoria() . '<br>';
echo 'Tipo de almacenamiento: ' . $mi_laptop -> get_tipo_almacenamiento() . '<br>';
echo 'Capacidad de almacenamiento: ' . $mi_laptop -> get_cap_almacenamiento() . '<br>';
echo 'Sistema operativo: ' . $mi_laptop -> get_sistema_operativo() . '<br>';
echo 'Suite_oficina: ' . $mi_laptop -> get_suite_oficina() . '<br>';
echo 'Procesador: ' . $mi_laptop -> get_procesador() . '<br>';
echo 'Numero de puertos USB: ' . $mi_laptop -> get_numero_puertos_usb() . '<br>';
if ($mi_laptop -> get_tactil() == True){
    echo 'Es tactil: Si' . '<br>';
}
elseif ($mi_laptop -> get_tactil() == False){
    echo 'Es tactil: No' . '<br>';    
}
echo 'La potencia de la bateria es de: ' . $mi_laptop -> get_pot_bateria() . '<br>';
echo '------------------------------------------ <br> <br> <br>';



// Se importa la clase Desktop que es subclase de la superclase Computador
require_once('Clase-desktop.php');

// Instancia de la clase Computador
$mi_desktop = new ComputadorDesktop ('Microsoft', 16, 'Ram', 'SSD', '2TB', 'Windows10', 'Office365', 'intel i7', 4, 1);

// Se llaman todos los metodos propios de la clase Computador
echo '------------------------------------------ <br>';
echo 'Esta es la instancia mi_desktop de la clase ComputadorDesktop <br> <br>';
echo 'Nombre de la fabrica: ' . $mi_desktop -> get_fabricante() . '<br>';
echo 'Capacidad de memoria: ' . $mi_desktop -> get_cap_memoria() . '<br>';
echo 'Tipo de memoria: ' . $mi_desktop -> get_tipo_memoria() . '<br>';
echo 'Tipo de almacenamiento: ' . $mi_desktop -> get_tipo_almacenamiento() . '<br>';
echo 'Capacidad de almacenamiento: ' . $mi_desktop -> get_cap_almacenamiento() . '<br>';
echo 'Sistema operativo: ' . $mi_desktop -> get_sistema_operativo() . '<br>';
echo 'Suite_oficina: ' . $mi_desktop -> get_suite_oficina() . '<br>';
echo 'Procesador: ' . $mi_desktop -> get_procesador() . '<br>';
echo 'Numero de puertos USB: ' . $mi_desktop -> get_numero_puertos_usb() . '<br>' ;
if ($mi_desktop -> get_ups() == True){
    echo 'UPS: Si' . '<br>';
}
elseif ($mi_desktop -> get_ups() == False){
    echo 'UPS: No' . '<br>';    
}
echo '------------------------------------------ <br> <br> <br>';


// Llamada de metodos estaticos de la clase Computador
echo '------------------------------------------ <br>';
echo 'Estos son los metodos estaticos de la clase Computador <br>';
echo Computador::mostrar_contador() . '<br>';
echo Computador::mostrar_fecha();
?>