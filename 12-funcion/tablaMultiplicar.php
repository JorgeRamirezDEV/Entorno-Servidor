<?php

function tablaMultiplicar($num){
    echo "<h3> Tabla de multiplicar del numero $num </h3>";
        for ($i = 1; $i <=10; $i++) {
            $multiplicacion = $num * $i;
            echo "$num x $i = $multiplicacion <br/>";
        }
}

if (isset ($_GET['numero'])){
    tablaMultiplicar($_GET['numero']);
}else {
    echo "no hay numero para mostrar su tabla";
}