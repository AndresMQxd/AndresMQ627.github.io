<?php
include "./conexion.php";
    
    $idparticipante = $_GET["id"];
    $idtanda = $_GET["id"];
    
    //echo $fechaReg; die();

    $con = "DELETE FROM Tandas
    WHERE id_tanda = $idtanda;";

    echo $con;
    $conexion -> query($con) or die ($conexion -> error);

    header("Location:../html/tandas.php?id=".$idtanda);
    
    

?>