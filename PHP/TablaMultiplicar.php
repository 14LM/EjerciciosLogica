<!-- Vamos a escribir un programa en PHP que pida un número al usuario y muestre su tabla de multiplicar 
hasta el 25 en una tabla HTML de 5 por 5 casillas.

El usuario escribirá el número en un formulario HTML.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas Multiplicar</title>
</head>
    <body>
  
    <?php 
    
    if(!isset($_REQUEST['numero'])){
        echo "<form action='TablaMultiplicar.php' method='POST'>
        Introduce un número:
        <input type='text' name='numero'>
        <br>
        <input type='submit' value='Enviar'>
        </form>";
    }
    else{
        $num= $_REQUEST['numero'];
        echo "<table border='1'>";
        echo "<tr><td=colspan='5'>La tabla de multiplicar del numero $num:</td></tr>";
        echo "<tr>";

        for($i = 1; $i <= 25; $i++) {

            if (($i-1) % 5 == 0) echo "</tr><tr>";
            echo "<td>$num x $i = " . ($num*$i) . "</td>";
        }

        echo "</tr>";
        echo "</table>";

    }
    
    ?>

    </body>
</html>
