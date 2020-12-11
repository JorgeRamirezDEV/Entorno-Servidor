<?php
    
            echo PHP_INT_SIZE. ' este es el tamano de un dato entero'. '<br>';
            echo PHP_INT_MIN. ' este es el valor minimo de un entero'. '<br>';
            echo PHP_INT_MAX. ' y este es el valor maximo de un entero'. '<br>';

            $a = 0b100; // en binario
            $a = 0100; // octal
            $a = 0x100; // hexadecimal
            $a = 3/2; // la divisi'on entre enteros no da problemas

            echo $a. '<br>'; // 1.5
            $b = 7.5;
            $a = (int) $b; // casting a int

            echo $a.'<br>'; // 7, se trunca
            $b = 7e2; // notacion cientifica
            $b = 7E2; // 7*10*2 
            echo $b;
?>