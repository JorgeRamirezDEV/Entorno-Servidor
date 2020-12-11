<?php 
    function rellenarArray($lista){
        for ($i=0; $i<120; $i++){
            array_push($lista, $i);
        }
        print_r($lista);
    }

    $array = array();

    rellenarArray($array);