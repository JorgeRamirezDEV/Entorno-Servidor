<?php 
    function rellenarArray(){
        $array = array();
        for ($i=0; $i<15; $i++){
            array_push($array, rand(0,100));
            echo $array[$i]." ";
        }

        return $array;
    }

    function rotarArray($array){
        $arrayRotado = array();
        array_push($arrayRotado, $array[14]);
        echo "<br>";
        for ($i=0; $i<sizeof($array); $i++){
            array_push($arrayRotado, $array[$i]);
            echo $arrayRotado[$i]." ";
        }
    }
    $array = array();
    $array = rellenarArray($array);

    rotarArray($array);
      
