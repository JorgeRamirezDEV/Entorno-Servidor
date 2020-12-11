<?php   
    $array = array(2,1,4,7,5,6,3,8);

    function mostrarArray($lista){
        echo "Array desordenado<br>";
        for ($i=0; $i<sizeof($lista); $i++){
            echo $lista[$i]."<br>";
        }
        //var_dump($lista);
    }

    function ordenarArray($lista){
        echo "Array ordenado <br>";
        sort($lista);
        for ($i=0; $i<sizeof($lista); $i++){
            echo $lista[$i]."<br>";
        }
    }

    function buscarElemento($lista, $num){
        $numero = array_search($num, $lista);
        if (empty($numero)){
            echo $num." No esta dentro del array<br>";
        }else{
            echo $num." Si esta dentro del array<br>";
        }
        
    }

    mostrarArray($array);
    ordenarArray($array);
    echo "Tamañado del array: ".sizeof($array)."<br>";
    buscarElemento($array, 7);
    buscarElemento($array, $_GET['num']);
