<?php
    function maximoComunDivisor($num1, $num2){
        $resultado = gmp_gcd($num1, $num2);
        return $resultado;
    }

    echo maximoComunDivisor(4, 12);