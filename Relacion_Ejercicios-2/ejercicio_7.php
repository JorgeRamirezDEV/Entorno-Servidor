<?php
    function primo($num1){
        $contador = 0;
        for ($i=1; $i<=$num1; $i++){
            if ($num1 % $i == 0){
                $contador++;
            }
        }
        if ($contador<=2){
            echo "$num1 es primo";
        }else{
            echo "$num1 no es primo";
        }
    }

    primo(3);