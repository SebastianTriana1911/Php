<!-- Para iniciar a escribir codigo php es necesario ingresar
las etiquetas que estan aqui abajo -->
<?php
    // Toda variable debe de iniciar con un signo pesos $
    $nombre = "Sebastian";
    $apellido = "Triana";
    /* Si se desea mostrar por ejemplo un string y una variable,
    se debe de concatenar las dos acciones mediante un "." */

    /* Para mostrar algo en pantalla se debe de hacer con la funcion
    echo seguido de lo que se desea mostrar, en parentecis o sin */
    echo ("Mi nombre es " . $nombre);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ejercicios php</title>
</head>
<body>
    <!-- Para llamar el valor de una variable que esta guardada en nuestro
    codigo php es necesario las etiquetas que abren el codigo php y dentro
    de ellas pasarle la variable que deseamos que se muestre en nuestro HTML -->
    <h1>Mi apellido es <?php echo $apellido; ?> </h1>    
</body>
</html>