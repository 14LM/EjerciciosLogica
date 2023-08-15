<!-- 

Crea un programa en PHP que determine si una palabra ingresada por el usuario es un palíndromo o no. 
Un palíndromo es una palabra que se lee igual de izquierda a derecha que de derecha a izquierda.

-->

<!DOCTYPE html>
<html>
<head>
    <title>Verificador de Palíndromos</title>
</head>
<body>
    <h1>Verificador de Palíndromos</h1>
    <form method="post">
        <label for="palabra">Ingrese una palabra:</label>
        <input type="text" id="palabra" name="palabra" required>
        <button type="submit">Verificar</button>
    </form>

<?php


function esPalindromo ($palabra){

    $palabra = str_replace(' ', '', strtolower($palabra)); //Eliminamos los espacios en blanco y pasamos a minusculas todo
    $reversa = strrev($palabra); //Asignamos una variable a la palabra del revés con el método strrev

    return $palabra === $reversa; //La función retorna en forma de booleano (si se cumple o no)
}


//SE SUPONE QUE HEMOS RECIBIDO UNA PALABRA A TRAVES DE UN FORMULARIO APARTE (mediante $_POST, por ejemplo)


if(isset($_POST['palabra'])){

    $palabra = $_POST['palabra'];

    if(esPalindromo($palabra)){
        echo "Su palabra es Palíndromo";
    }else{
        echo "Su palabra NO es Palíndromo";
    }

}else{
    echo "Por favor, rellene el formulario con su palabra";
}


?>

</body>
</html>