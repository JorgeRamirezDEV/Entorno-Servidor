<?php
    try{
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        if ($usuario === "usuario" && $contraseña === "1234"){
            header("Location: ejercicio_3Sesion.php");
        }else{
            throw new Exception('Usuario no registrado');
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }