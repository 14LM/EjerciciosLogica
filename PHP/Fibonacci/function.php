<?php

function calculoFibo($secuencia) {
    $fibo = array(0, 1);

    for ($i = 2; $i < $secuencia; $i++) {
        $fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];
    }

    return $fibo;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['secuencia'])) {

        $input = $_POST['secuencia'];

        $serieFibo = calculoFibo((int)$input); // Convertimos los valores de $input en numeros enteros (int), en caso
        //de que $input no sea un numero, lo convertirá a 0.

        echo implode(", ", $serieFibo); // Convertimos el array en una cadena para mostrarlo en pantalla
    }
}

?>



