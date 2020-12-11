<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <tittle>Ambito de mis variables </title>
    </head>
<body>
<?php

$a = 1;
echo 'Vamos a sumarle dos a una variable inicializada con el valor: ' .$a. '<br>';
echo "Probamos que ocurre si es de ambito local en una funcion <br>";

// ejemplo de ambito local

function sumale2 () {
    // Dentro de la funcion no se tiene acceso a la variable $a anterios


    $resultado = $a +2;

    /*Por tanto, la variable $a usada en la asignacion anterior es una
     *variabe nueva
     *que no tiene valor asignado (su valor es null) */
    

     echo 'la suma es ' .$resultado. ' porque la variable $a dentro de esta funcion no esta asignado <br>';
     echo "es decir, su valor el null y PHP antes de sumarle da el valor 0 <br>";
}

sumale2();

echo 'ahora probamos que ocurre si la declaramos como global'. '<br>';

//EJEMPLO DE AMBITO GLOBAL

function sumale2_global(){

    global $a;
    /* al hacer esta declaracion de la variable $a tiene el valor 1
     * y por lo tanto la suma dara 3 */

    $resultado = $a + 2;

    echo 'la variable resultado ahora vale '. $resultado. 'porque la he declarado global';

}
sumale2_global();

?>    