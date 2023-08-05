<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>

<h3>Secuencia de Fibonacci</h3>

<form action="function.php" method="post">
    <label for='secuencia'>Introduce el número del cual quieres calcular la secuencia de Fibonacci</label><br><br>
    <input name='secuencia' type="text" pattern="100|([1-9][0-9]?)" title="Solo se permiten números" placeholder="Introducir número"><br><br>
    <input type="submit" value="Calcular"> 
</form>
    
</body>
</html>