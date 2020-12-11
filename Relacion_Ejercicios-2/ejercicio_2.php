<?php
    function factorial($num1){
        $resultado = 1;
        for ($i=1; $i<=$num1; $i++){
            $resultado *= $i;
        }
        echo $resultado;
    }

    factorial(4);
    