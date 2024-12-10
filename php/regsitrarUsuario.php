<?php
include "./conexion.php";
$nombre = $_POST['txtName'];
$email = $_POST['txtEmail'];
$pass = $_POST['txtPass'];
$fechaActual = date("Y-m-d");;
$rol = $_POST["txtRol"];
//echo $fechaReg; die();

$con = "insert into Usuarios values
(0,'$nombre', '$email', '$pass', '$fechaActual', '$rol')";


$conexion -> query($con) or die ($conexion -> error);

header("Location:../html/login.php");
    
?>