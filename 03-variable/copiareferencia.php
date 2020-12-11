<?php

    // asignacion por copia y por referencia
        $var1= 100;
        $var2= &$var1; // por referencia
        $var3= $var1;  // asignacion por copia

        echo " var2 vale $var2<br>"; // muestra 100
        $var2 = 300; //cambia el valor de $var2
        echo "al hacerlo por referencia var1 cambia a $var1 <br>"; // var1 tambien cambia
        $var3 = 400; // este cambio no afecta a var1
        echo "por valor no cambia var1 $var1";

?>