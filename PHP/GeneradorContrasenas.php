<!-- 
    Crea un programa en PHP que genere contraseñas aleatorias basadas en ciertos criterios. 
    El programa debe cumplir con lo siguiente:
    
Debe permitir al usuario especificar la longitud deseada de la contraseña.
Debe permitir al usuario seleccionar si desea incluir letras mayúsculas, letras minúsculas, números y símbolos en la contraseña.
Debe generar y mostrar la contraseña aleatoria según los criterios seleccionados.
-->


<?php


function GenerarContrasena ($longitud,$mayus,$minus,$nums,$simb){

    $caracteres = '';

    if($mayus){
        $caracteres="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }
    if($minus){
        $caracteres="abcdefghijklmnopqrstuvwxyz";
    }
    if($nums){
        $caracteres="1234567890";
    }
    if ($simb){
        $caracteres="!@#$%^&*_+-=|\\/?,:.;";
    }

    //Barajamos todos los caracteres de forma aleatoria
    $barajada = str_shuffle($caracteres);

    //Creamos la variable $start para poder utilizarla como segundo parametro en la extracción de la contraseña
    $start = rand(0, strlen($barajada) - $longitud);

    //Extracción de contraseña (cadena que queremos usar, inicio del primer caracter, longitud de la extracción)
    $contrasenaFinal = substr($barajada,$start,$longitud);

    
    return $contrasenaFinal;
}



?>