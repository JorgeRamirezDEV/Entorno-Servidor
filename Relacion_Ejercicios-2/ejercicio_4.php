<?php
    function exponencial($num, $exponencial = 2){
        if (empty($exponencial)){
            $num *= $num;
        }else{
            $num = pow($num, $exponencial);
        }
        return $num;
    }

    echo exponencial(3)."<br>";
    echo exponencial(3, 3);