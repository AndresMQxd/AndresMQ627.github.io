<?php session_start();
   include "./conexion.php";
   $user = $_POST['txtUser'];
   $password = $_POST['txtPass'];

   echo "Bienvenido $user Password: $password";
   echo "<br>";
   $query = "select * from Usuarios where email = '$user' and contraseña = '$password';";

   $res = $conexion -> query($query);

   if(mysqli_num_rows($res) > 0){

    echo "Login Correcto";
    $fila = mysqli_fetch_row($res);
    echo '<br>';
    echo "Nombre: ".$fila[1].'<br>';
    echo "Email: ".$fila[2].'<br>';
    echo "ID: ".$fila[0].'<br>';
    echo "tipo_usuario: ".$fila[5].'<br>';

    $arr = [
      
      'id' => $fila[0],
      'Nombre' => $fila[0],
      'Email' => $fila[0],
      'tipo_usuario' => $fila[0]

    ];

    $_SESSION['userdata'] = $arr;

    if($fila[5] == 'Administrador'){
      header("Location:../html/home.php");
    }else{
      header("Location:../html/index.html");
    }
   }else{

    echo "Datos no validos";
    header("Location:../html/login.php?error=datos no validos");
   }


?>