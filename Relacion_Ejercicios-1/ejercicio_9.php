<?php
    if (empty($_GET["num1"]) or empty($_GET["num2"])){
        echo "No se encuentran los parametros num1 y num2";
        return;
    }
    if (!is_numeric($_GET['num1']) or !is_numeric($_GET["num2"])){
        echo "num1 y num2 tienen que ser numeros";
        return;
    }
    $suma = $_GET["num1"] + $_GET["num2"];
    $resta = $_GET["num1"] - $_GET["num2"];
    $multiplicacion = $_GET["num1"] * $_GET["num2"];
    echo "La suma es $suma <br>";
    echo "La resta es $resta <br>";
    echo "La multiplicacion es $multiplicacion <br>";
    if ($_GET["num2"] != 0){
        $division = $_GET["num1"] / $_GET["num2"];
        echo "La division es: $division";
    }else{
        echo "No se puede dividir entre 0";
    }
