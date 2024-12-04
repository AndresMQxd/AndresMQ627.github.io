<?php
include "./conexion.php";
    $nombreTanda = $_POST['txtName'];
    $numParticipantes = $_POST['txtParticipantes'];
    $fechaInicio = date('Y-m-d');
    $duracion = $_POST['txtDuracion'];
    $estado = 'Activa';
    $cantidad = $_POST['txtMonto'];
    $frecuanciaPagos = $_POST['txtFrecuancia'];
    $apotacionesIndiv = $_POST['txtAportaciones'];

    $con = "insert into Tandas values
    ('$name', $numParticipantes, '$fechaInicio', '$estado', $cantidad, '$duracion', '$frecuanciaPagos', $apotacionesIndiv )";

    echo $con;
    $conexion -> query($con) or die ($conexion -> error);
    echo "\nREgistro insertado correctamente";


    
    

?>