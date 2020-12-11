<?php
    function factorial($num1){
        $resultado = 1;
        if ($num1<0){
            throw new InvalidArgumentException('Numero negativo');
        }else{
            for ($i=1; $i<=$num1; $i++){
                $resultado *= $i;
            }
            echo $resultado;
        }

    }
    try{
        factorial($_GET['num']);
    }catch(InvalidArgumentException $e){
        echo $e->getMessage();
    }
    