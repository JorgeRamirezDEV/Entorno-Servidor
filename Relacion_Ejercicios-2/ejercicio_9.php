<?php 

    function contraseña($cadena){
        if (strlen($cadena)>=6 && strlen($cadena)<=15){
            if (preg_match('/([0-9]+)/', $cadena)){
                if (preg_match('/([A-Z]+)/', $cadena)){
                    if (preg_match('/([a-z]+)/', $cadena)){
                        if (preg_match('/\W+/', $cadena)){
                            echo "Contraseña correcta";
                        }else{
                            echo "La contraseña debe tener al menos 1 caracter no alfanumerico";
                        }
                    }else{
                        echo "La contraseña debe tener al menos 1 caracter en minuscula";
                    }
                }else{
                    echo "La contraseña debe tener al menos un caracter en mayuscula";
                }
            }else{
                echo "La contraseña debe tener al menos 1 numero";
            }
        }else {
            echo "La contraseña debe estar entre los 6 y los 15 caracteres";
        }
    }

    contraseña("Hola");