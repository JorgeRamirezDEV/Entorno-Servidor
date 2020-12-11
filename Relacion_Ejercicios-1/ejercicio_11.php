<?php
    for ($i=1; $i<=10; $i++){
        echo "<h1>Tabla del $i</h1> <br>";
        for ($j=1; $j<=10; $j++){
            $resultado = $i*$j;
            echo "$i x $j= ".$resultado."<br>";
        }
    }
?>