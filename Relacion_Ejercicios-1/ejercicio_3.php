<?php

    echo $a = 1;
    echo $b = -5;
    echo $c = 6;

    $discriminante = (($b*$b)-(4*$a*$c));
    $resultadoPositivo = -$b + sqrt($discriminante)/(2*$a);
    $resultadoNegativo = -$b - sqrt($discriminante)/(2*$a);
    
    echo ("La ecuacion $a+$b+$c=0 es igual a $resultadoPositivo<br>");
    echo ("La ecuacion $a+$b+$c=0 es igual a $resultadoNegativo");
