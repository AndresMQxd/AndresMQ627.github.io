<?php
include "./conexion.php";
    $nombre = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $tel = $_POST['txtTel'];
    $idtanda = $_POST["txtID"];
    $fechaReg = $_POST["fechaReg"];
    //echo $fechaReg; die();

    $con = "insert into Participantes values
    (0,$idtanda, '$nombre', '$fechaReg', '$email', '$tel')";

    echo $con;
    $conexion -> query($con) or die ($conexion -> error);

    header("Location:../html/participantes.php?id=".$idtanda);
    
    

?>