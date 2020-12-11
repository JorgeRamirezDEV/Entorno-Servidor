<?php 
    $aleatorio1 = rand(1, 6);
    $aleatorio2 = rand(1, 6);
    if ($aleatorio1 == $aleatorio2){
        echo ("$aleatorio1 y $aleatorio2 son iguales");
    }else if($aleatorio1 > $aleatorio2){
        echo ("$aleatorio1 es mayor que $aleatorio2");
    }else{
        echo ("$aleatorio1 es menor que $aleatorio2");
    }