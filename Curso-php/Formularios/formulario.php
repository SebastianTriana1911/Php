<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <!-- Formulario -->
    <!-- enctype="multipart/form-data": Este metodo se utiliza
        cuando deseamos habilitar el envio de archivos en un formulario -->
    <form action="procesar.php" method="POST" enctype="multipart/form-data">

        <!-- Campo Nombre con input de tipo texto -->
        <label>
            Nombre:
            <input type="text" name="name"/>
        </label>

        <br>
        <br>

        <!-- Campo Edad con input de tipo numerico -->
        <label>
            Edad:
            <input type="number" name="edad"/>
        </label>

        <br>
        <br>

        <!-- Campo Sexo con input de tipo radio que se utiliza cuando solo
            se pueda seleccionar una sola opcion entre las posibilidades, para
            que solo se pueda escoger una sola opcion todos los inputs deberan
            corresponder al mismo nombre (name) -->
        <label>
            Sexo: <br>
            <input type="radio" name="sexo" value="masculino"/> Masculino 
            <input type="radio" name="sexo" value="femenino"/> Femenino 
        </label>

        <br>
        <br>
        
        <!-- Campo Roles con input de tipo checkbox que se utiliza cuando deseamos
            que se escoja mas de un elemento en un grupo de posibilidades, para identificar
            que opciones escogio el usuario todos los inputs correspondran la mismo nombre
            seguido de un array, pues cada una de las opciones se mandra a una de estas --> 
        <label>
            Roles: <br>
            <input type="checkbox" name="roles[]" value="Administrado">Administrador
            <input type="checkbox" name="roles[]" value="Aditor">Editor
            <input type="checkbox" name="roles[]" value="Moderador">Moderador
        </label>

        <br> 
        <br>

        <label>
            Imagen: <br>
            <input type="file" name="imagen"/>
        </label>

        <br> 
        <br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>