<?php
    $conexion = new mysqli("localhost","root","","bd_acd_sistemaweb_auth");

    if($conexion->connect_error){
        die("Error de conexión: ". $conexion->connect_error);
    }
?>