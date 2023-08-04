<?php


    function calculoNumeros($numeros){
        $contadorPar=0;
        $contadorImpar=0;

        foreach($numeros as $numero){
            if($numero % 2==0){
                $contadorPar++;
            }else{
                $contadorImpar++;
            }
        }

        return array (
            'Pares' => $contadorPar,
            'Impares' => $contadorImpar
        );

    }

    if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['lista'])){

        $lista = $_POST['lista'];

        if(empty($lista)){ //Muy importante esta condicion, para cuando el formulario este vacío.
            $lista = array();
        }else{
         // Expresión regular para separar los números por comas, espacios o guiones
            $patron = '/[,\s-]+/';

        $numeros = preg_split($patron, $lista);

        // Convertimos cada numero del array en un valor entero
            $numeros = array_map('intval', $numeros);

            $resultado = calculoNumeros($numeros);

        }

            echo "Cantidad de números pares: " . $resultado['Pares'] . "<br>";
            echo "Cantidad de números impares: " . $resultado['Impares'] . "<br>";
    }

    }else{
        echo "Rellene el formulario, por favor";
    }



?>