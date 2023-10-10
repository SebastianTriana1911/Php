<?php
// Se importa el archivo que contiene la clase padre Automotor
require_once ('Clase-automovil.php');

// Se instancia un objeto de la clase Automotor
$mi_automotor = new Automotor ('Bmw', '2020', 5000000);

// Metodos propios de la clase
echo 'Instancia del objeto de la clase Automotor <br> <br>';
echo 'Marca automovil: ' .$mi_automotor->get_marca() .'<br>';
echo 'Modelo automovil: ' .$mi_automotor->get_modelo() .'<br>';
echo 'Precio automovil: ' .$mi_automotor->get_modelo() .'<br>';


// Se importa el archivo que contiene la clase Automovil subclase de la clase Automotor
require_once ('Clase-automovil.php');

// Se instancia un objeto de la clase Automovil
$mi_automovil = new Automovil ('Chevrolet', '2014', 30000000, 'SEDAN', 'Azul');

// Metodos heredados de la clase padre Automotor y metodos propios de la clase Automovil
echo '<br> <br>Instancia del objeto de la clase Automovil <br> <br>';
echo 'Marca automovil: ' .$mi_automovil->get_marca() .'<br>';
echo 'Modelo automovil: ' .$mi_automovil->get_modelo() .'<br>';
echo 'Precio automovil: ' .$mi_automovil->get_modelo() .'<br>';
echo 'Tipo: ' .$mi_automovil->get_tipo() .'<br>';
echo 'Color: ' .$mi_automovil->get_color() .'<br>';

// Se importa el archivo que contiene la clase Camion subclase de la clase Automotor
require_once ('Clase-camion.php');

// Se instancia un objeto de la clase Camion
$mi_camion = new Camion('Renault Trucks', '2021', 100000000, 6, 35);


// Metodos heredados de la clase padre Automotor y metodos propios de la clase Camion
echo '<br> <br>Instancia del objeto de la clase Camion <br> <br>';
echo 'Marca camion: ' .$mi_camion->get_marca() .'<br>';
echo 'Modelo camion: ' .$mi_camion->get_modelo() .'<br>';
echo 'Precio camion: ' .$mi_camion->get_precio() .'<br>';
echo 'Numero de ejes: ' .$mi_camion->get_num_ejes() .'<br>';
echo 'Capacidad de carga: ' .$mi_camion->get_cap_carga() .'<br>';

?>