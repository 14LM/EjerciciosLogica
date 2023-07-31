<!--Vamos a escribir una aplicación web en PHP para jugar al juego del número secreto.

Es un juego clásico que consiste en lo siguiente: el ordenador elegirá un número al azar entre 1 y 100 
y el jugador tendrá que averiguarlo. Cada vez que el jugador haga un intento, la aplicación le indicará 
si el número secreto es mayor o menor que el número introducido.

Cuando el jugador por fin acierte, la aplicación le dará la enhorabuena 
y le indicará cuántos intentos ha necesitado para averiguar el número secreto.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivinar numero</title>
</head>
<body>

<h3>JUEGO ADIVINAR NUMERO</h3>
<p>Introduce un numero entre el <b>1</b> y <b>100</b> en los mínimos intentos posibles</p>
    
<?php

    session_start();

    if(!isset($_REQUEST['numero'])){

        if(!isset($_SESSION['aleatorio'])){
            $_SESSION['intentos'] = 0;
            $_SESSION['aleatorio'] = random_int(1,100);
        }
         
            echo "<form action = 'NumeroSecreto2.php' method= 'POST'>
            <input type='number' name='numero'>
            <input type='submit' value='Enviar'>
            </form>";
    }
    else{
        $num= $_REQUEST['numero'];
        echo "Tu numero es: $num <br>";

        if(!is_numeric($num)){
            echo "El valor introducido no corresponde a un numero, intentelo de nuevo";
            echo "<br><br><a href= 'NumeroSecreto2.php'> Intentar de nuevo </a>";
        } else{

            $_SESSION['intentos']++;

        if($num>$_SESSION['aleatorio']){
            echo "El número correcto es menor, vuelve a intentarlo";
        }
        else if($num<$_SESSION['aleatorio']){
            echo "El número correcto es mayor, vuelve a intentarlo";
        }
        else{
            echo "ENHORABUENA, HAS ACERTADO EN " . $_SESSION['intentos'] . " INTENTOS";
            unset($_SESSION['aleatorio']);
            unset($_SESSION['intentos']);
        }

        echo "<br><br><a href='NumeroSecreto2.php'>Volver a jugar</a>";
    }
}

?>


</body>
</html>

