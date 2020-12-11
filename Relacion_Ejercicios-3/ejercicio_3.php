<?php
    function rellenarArray(){
        $array = array();
        for ($i=0; $i<7; $i++){
            array_push($array, rand(0,1));
            echo $array[$i];
        }
        echo "<br>";
        return $array;
    }

    function complementario($array){
        $arrayComplementario = array();
        for ($i=0; $i<sizeof($array); $i++){
            if ($array[$i] == 1){
                array_push($arrayComplementario, 0);
                echo $arrayComplementario[$i];
            }else{
                array_push($arrayComplementario, 1);
                echo $arrayComplementario[$i];
            }
        }
    }
    complementario(rellenarArray());