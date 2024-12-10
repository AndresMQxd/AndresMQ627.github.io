<?php
include "./conexion.php";
$nombre = $_POST['txtName'];
$email = $_POST['txtEmail'];
$pass = $_POST['txtPass'];
$fechaActual = new DateTime();
$rol = $_POST["txtRol"];
//echo $fechaReg; die();

$con = "insert into Usuarios values
(0,$nombre, '$email', '$pass', '$fechaActual', '$rol')";

echo $con;
$conexion -> query($con) or die ($conexion -> error);

header("Location:../html/participantes.php?id=".$idtanda);
?>