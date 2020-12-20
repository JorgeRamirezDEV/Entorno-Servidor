<?php
function buenasDias (){
    return "Hola, buenos dias";
}

function buenasTardes () {
    return "Hola, buenas tardes";
}

function buenasNoches () {
    return "Te vas a dormir? Buenas noches";
}


$horario = $_GET['hora'];
$mifuncion = "buenas".$hora;

?>