<?php 
    function vacio($cadena=""){
        if (empty($cadena)){
            $cadena = "hola<br>";
            $cadena = strtoupper($cadena);
            echo $cadena;
        }else{
            echo $cadena;
        }
    }

    vacio();
    vacio("Adios");
