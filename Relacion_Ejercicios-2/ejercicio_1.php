<?php
    function calculadora($num1, $num2, $operacion){
        if ($operacion == '+'){
            $resultado = $num1+$num2;
            echo ("La suma de $num1 + $num2 es igual a: $resultado <br>");
        }else if ($operacion == '-'){
            $resultado = $num1-$num2;
            echo ("La resta de $num1-$num2 es igual a: $resultado<br>");
        }else if ($operacion == '*'){
            $resultado = $num1*$num2;
            echo ("La multiplicacion de $num1*$num2 es igual a: $resultado<br>");
        }else {
            $resultado = $num1/$num2;
            echo ("La division de $num1/$num2 es igual a: $resultado");
        }
    }
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operacion = $_GET['operacion'];

    calculadora($num1, $num2, $operacion);
