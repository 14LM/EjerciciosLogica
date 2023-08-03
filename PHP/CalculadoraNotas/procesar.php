<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['notas'])) { 
        include 'funciones.php'; //Muy importante, al principio no me funcionaba por falta de esto.

        $notasStr = $_POST['notas'];

        if (empty($notasStr)) {
            $notas = array(); // Si no se ingresaron notas, asignar un array vacío ❗️❗️
        } else {
            // Convertir las notas en un array de números enteros
            $notas = array_map('intval', explode(',', $notasStr));
        }

        // Resto del código

        //LLAMAMOS A LAS FUNCIONES (funciones.php) y las agregamos a variables $
        $promedio = CalcularPromedio($notas);
        $maximaNota = CalcularMax($notas);
        $minimaNota = CalcularMin($notas);
        $suspensas = contarSuspensas($notas);
        $aprobadas = contarAprobadas($notas);

        //MOSTRAMOS LOS RESULTADOS
        echo "<h2>RESULTADOS</h2>";
        echo "<p>Promedio de notas: $promedio</p><br>";
        echo "<p>Maxima nota: $maximaNota</p><br>";
        echo "<p>Minima nota: $minimaNota</p><br>";
        echo "<p>Numero de suspensas: $suspensas</p><br>";
        echo "<p>Numero de aprobadas: $aprobadas</p><br>";
    } else {
        echo "Por favor, completa el formulario antes de enviarlo";
    }
}



?>