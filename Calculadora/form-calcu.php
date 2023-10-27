<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
<form action="Calculadora.php" method="POST" >

    <input type="number" name="numero-1" value ="" placeholder="Escriba el primer numero"/>
    <br>
    <br>
    <input type="number" name="numero-2" value ="" placeholder="Escriba el segundo numero"/>
    <br>
    <br>
    <select name="operaciones" id="operaciones">
        <option name="suma" value="suma"> Suma</option>
        <option name="resta" value="resta"> Resta</option>
        <option name="multiplicacion" value="multiplicacion"> Multiplicacion</option>
        <option name="division" value="division"> Division</option>
    </select>
    <input type="submit" name="" value ="Enviar"/>

</form>
</body>
</html>