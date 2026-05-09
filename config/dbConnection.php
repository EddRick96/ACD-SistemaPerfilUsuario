<?php
    $connection = new mysqli("localhost","root","","bd_acd_sistemaweb_auth");

    if($connection->connect_error){
        // En producción, solo mostrar un mensaje genérico.
        die("Error de conexión: ". $connection->connect_error);
    }
?>