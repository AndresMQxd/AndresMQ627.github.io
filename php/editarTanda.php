<?php
include "./conexion.php";
$idtanda = $_POST['txtId'];
$nombreTanda = $_POST['txtName'];
$numParticipantes = $_POST['txtParticipantes'];
$duracion = $_POST['txtDuracion'];
$cantidad = $_POST['txtMonto'];
$frecuanciaPagos = $_POST['txtFrecuancia'];
$apotacionesIndiv = $_POST['txtAportaciones'];

  
    
    $con = "UPDATE Tandas
SET nombre_tanda = '$nombreTanda', num_participantes = $numParticipantes, cantidad = $cantidad, periodoDePago = '$frecuanciaPagos', MontoDePago = $apotacionesIndiv
WHERE id_tanda =$idtanda ;";

    echo $con;
    $conexion -> query($con) or die ($conexion -> error);

    header("Location:../html/tandas.php");
    
    

?>