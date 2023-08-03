<!--  
    Crea un programa que cuente cuántas veces se repite cada palabra en un texto ingresado por el usuario. 

    Ejemplo de cómo podría ser la ejecución del programa:

El usuario ingresa el siguiente texto: "el perro corre, el gato salta, el perro juega".
El programa procesa el texto y muestra los resultados:
"el" se repite 3 veces.
"perro" se repite 2 veces.
"corre" se repite 1 vez.
"gato" se repite 1 vez.
"salta" se repite 1 vez.
"juega" se repite 1 vez.
-->

<?php
function contarPalabras($frase) {
    // Utilizamos la función explode para dividir la frase en palabras
    $palabras = explode(" ", $frase);

    // Aquí vamos a implementar la lógica para contar las repeticiones de cada palabra
    $palabrasContadas = array();

    foreach ($palabras as $palabra) {
        // Limpiar la palabra de posibles signos de puntuación y convertirla a minúsculas
        $palabra = preg_replace('/[^a-zA-Z ]/', '', $palabra);
        $palabra = strtoupper($palabra);

        // Verificar si la palabra ya existe en el arreglo $palabrasContadas
        if (isset($palabrasContadas[$palabra])) {
            // Si la palabra existe, aumentar su valor en 1
            $palabrasContadas[$palabra]++;
        } else {
            // Si la palabra no existe, inicializarla en 1
            $palabrasContadas[$palabra] = 1;
        }
    }

    // Devolvemos el arreglo con las palabras y su cantidad de repeticiones
    return $palabrasContadas;
}

// Obtener el texto ingresado por el usuario desde el formulario
if (isset($_POST['frase'])) {
    $frase = $_POST['frase'];

    // Llamar a la función para contar las palabras y obtener el resultado
    $resultado = contarPalabras($frase);

    // Mostrar los resultados en el formato deseado (por ejemplo, recorrer el arreglo $resultado)
    echo "<h3>Tu frase: $frase</h3>";
    foreach ($resultado as $palabra => $repeticiones) {
        echo "-<b>\"$palabra\"</b> se repite <b>$repeticiones</b> veces.<br><br>";
    }
}
?>