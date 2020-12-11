<?php
    if(isset($_GET['num1']) & isset($_GET['num2'])){
        if($_GET['num1'] < $_GET['num2']){
            for ($i=$_GET['num1']+1; $i<$_GET['num2']; $i++){
                if ($i % 2 != 0){
                    echo ("$i <br>");
                }
            }
        }else{
            echo "El segundo numero es mayor que el primero";
        }

    }