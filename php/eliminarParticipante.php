<?php
include "./conexion.php";
    
    $idparticipante = $_GET["id"];
    $idtanda = $_GET["id_tanda"];
    
    //echo $fechaReg; die();

    $con = "DELETE FROM Participantes
    WHERE id_participante = $idparticipante;";

    echo $con;
    $conexion -> query($con) or die ($conexion -> error);

    header("Location:../html/participantes.php?id=".$idtanda);
    
    

?>