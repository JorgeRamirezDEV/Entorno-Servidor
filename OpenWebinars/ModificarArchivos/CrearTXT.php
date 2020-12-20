<?php

$fichero = fopen('DatosPersonales.txt', 'w');

fwrite( $fichero, "Nombre: Jorge \n");
fwrite ($fichero, "Apellidos: Ramirez \n");
fwrite ($fichero, "Edad: 22 \n");
fwrite ($fichero, "DNI: 11111111T \n");
fwrite ($fichero, "Teléfono: 656656656 \n");
fwrite ($fichero, "Correo: jorgeramirezinstituto@gmail.com \n");

fclose($fichero);

$ficheroLeer = fopen('DatosPersonales.txt', 'r');
while (!feof($ficheroLeer)){
    //Leyenfo una linea
    $linea = fgets($ficheroLeer);
    //Imprimiendo linea
    echo nl2br($linea);
}

fclose($ficheroLeer);