<!--
Encontrar el subconjunto con la suma máxima

Dado un array de números enteros, tu tarea es encontrar el subconjunto no vacío (es decir, al menos un número)
 con la suma máxima. Si hay varios subconjuntos con la misma suma máxima, devuelve cualquiera de ellos.
-->


<?php 

function maxSubArray($array){

    $n = count($array);
    $MaxActual = $MaxSuma = $array[0];

    for($i=1;$i<$n;$i++){
        $MaxActual = max($array[$i], $MaxActual+$array[$i]); //Comprueba si es mejor empezar la secuencia o no 
        $MaxSuma = max ($MaxSuma, $MaxActual); //Comprueba si la máxima suma es la que tenemos hasta el momento o la nueva ($maxActual)
    }

    return $MaxSuma;

}


//EJEMPLO DE USO

$array = [1,2,3,-5,6,7,8];

$resultado = maxSubArray($array);

echo $resultado;

?>