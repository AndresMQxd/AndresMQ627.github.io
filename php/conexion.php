<?php
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "TANDALOOP_DB";

    $conexion = new mysqli($server, $user, $pass, $db);
    if($conexion -> connect_error){
        die("No se pudo conectar a sql, PRENDE EL XAMPP");
    }



?>