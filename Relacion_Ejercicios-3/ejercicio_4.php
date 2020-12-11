<?php

    function primerArray(){
        $array = array();
        for ($i=0; $i<20; $i++){
            array_push($array, rand(0, 100));
        }

        return $array;
    }


    function exponencialArray($array, $num){
        $arrayExponencial = array();
        for ($i=0; $i<sizeof($array); $i++){
            array_push($arrayExponencial, pow($array[$i], $num));
            //echo $array[$i]." ".$arrayCubo[$i]."<br>";
        }
        return $arrayExponencial;
    }

    function imprimirArrays($array1, $array2, $array3){
        echo "<table border=1>";
        for ($i=0; $i<sizeof($array1); $i++){
            echo "<tr><td>".$array1[$i]."</td><td>".$array2[$i]."</td><td>".$array3[$i]." </td></tr>";
        }
        echo "</table>";
    }

    $array1 = primerArray();
    $array2 = exponencialArray($array1, 2);
    $array3 = exponencialArray($array1, 3);

    imprimirArrays($array1, $array2, $array3);