<?php

function calcularMayor($numeros) {
    $max = $numeros[0];
    foreach ($numeros as $numero) {
        if ($numero > $max) {
            $max = $numero;
        }
    }
    return $max;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['numeros'])) {

        $input = $_POST['numeros'];

        // Utilizar preg_split con una expresión regular que coincida con espacios y guiones como delimitadores
        $numeros = preg_split('/[\s,\/.]+/', $input, -1, PREG_SPLIT_NO_EMPTY);


        // Convertir cada elemento del array en un entero (int)
        $numeros = array_map('intval', $numeros);

        if (empty($numeros)){
            echo "Introduce una secuencia correctamente";
        } else {
            // SOLUCIÓN ESPERADA (se ejecuta la función creada)
            $resultado = calcularMayor($numeros);
            echo "El número MAYOR de la secuencia que has introducido es: $resultado";
        }

    } else {
        echo "Por favor, introduce una secuencia de números.";
    }
}

?>
