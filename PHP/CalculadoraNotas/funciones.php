<!--
    Descripción: Escribe un programa en PHP que tome un array de notas 
    y realice las siguientes operaciones para obtener algunas estadísticas:

Calcular el promedio de las notas.
Encontrar la nota más alta.
Encontrar la nota más baja.
Contar la cantidad de notas aprobadas (notas mayores o iguales a 70) y suspensas (notas menores a 70).
Instrucciones:

Crea una función para cada operación que se describió anteriormente.
Puedes utilizar funciones predefinidas de PHP, como array_sum, max, min, etc., 
pero también intenta implementar tus propias soluciones si es posible.
-->


<?php

function CalcularPromedio($notas){

    if (empty($notas)){
        return null; //No podemos calcular la media de nota si no hay notas.
    }

    $sumaNotas = array_sum($notas);
    $totalNotas = count($notas);

    $promedioNotas = $sumaNotas/$totalNotas;

    return $promedioNotas;
}


function CalcularMax($notas){
  
    if (empty($notas)){
        return null; //No podemos calcular la maxima nota si no hay notas.
    }

    $maxima = $notas[0];

    foreach($notas as $nota){
        if ($nota>$maxima){
            $maxima = $nota;
        }
    }

    return $maxima;
}


function CalcularMin($notas){
  
    if (empty($notas)){
        return null; //No podemos calcular la minima nota si no hay notas.
    }

    $minima = $notas[0];

    foreach($notas as $nota){
        if($nota<$minima){
            $minima = $nota;
        }
    }

    return $minima;
}


function contarSuspensas($notas){

    if (empty($notas)){
        return null; //No podemos contar suspensas si no hay notas.
    }

    $suspensas = 0;

    foreach($notas as $nota){
        if($nota<70){
            $suspensas ++;
        }
    }

        return $suspensas;
}


function contarAprobadas($notas){

    if (empty($notas)){
        return null; //No podemos contar aprobadas si no hay notas.
    }

    $aprobadas = 0;

    foreach($notas as $nota){
        if($nota>=70){
            $aprobadas ++;
        }
    }

        return $aprobadas;
}

?>
    
