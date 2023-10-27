<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario operaciones</title>
</head>
<body>
    <h1>Formulario de operaciones con seleccion multiple</h1>
    <form action="match.php" method="POST"> 
        <input type="number" name="numero1" value="" placeholder="Ingrese el numero 1"> <br> <br>
        <input type="number" name="numero2" value="" placeholder="Ingrese el numero 2"> <br> <br>
        <select name="operacion" id="operacion">
            <option name=suma >Sumar</option>
            <option>Restar</option>
            <option>Multiplicar</option>
            <option>Dividir</option>
        </select>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>