<?php
include "./conexion.php";
    
$idparticipante = $_POST["txtid"];
$idtanda = $_POST["txtIdTanda"];
$nombre = $_POST['txtNombre'];
$email = $_POST['txtEmail'];
$tel = $_POST['txtTel'];

//echo $fechaReg; die();

$con = "UPDATE Participantes
SET nombre = '$nombre', email = '$email', telefono = '$tel'
WHERE id_participante =$idparticipante ;";

echo $con;
$conexion -> query($con) or die ($conexion -> error);
header("Location:../html/participantes.php?id=".$idtanda);




?>