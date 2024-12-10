<?php
     if(isset($_GET['error'])){
        $error = $_GET['error'];
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/styleLogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Oswald:wght@200..700&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
   <section>
    <div class="imgBx">
        <img src="../img/fondologin.PNG" alt="">
    </div>
    <div class="contenidoBx">
        <div class="formBx">
            <h2>Bienvenido a TandaLooop</h2>
            <div ></div>
            <form action="../php/login.php" method="post" id="loginForm">
                <div class="inputBx">
                    <span>Email</span>
                    <input  name="txtUser" type="text" id="usuario" required>
                </div>
                <div class="inputBx">
                    <span>Contraseña</span>
                    <input name="txtPass" type="password" id="contrasena" required>
                </div>
                <div class="recordarContra">
                    <label>
                        <input type="checkbox">
                        Recordar Contraseña
                    </label>
                </div>
                <div class="inputBx">
                    <input type="submit" value="Entrar">
                </div>
                <div class="inputBx">
                    <p>Aún no tienes una cuenta? <a href="../html/registro.php">Regístrate aquí</a></p>
                    <a class="icono" href="../html/index.html"><img src="../img/volver.png" alt=""></a>
                </div>
            </form>
            <h3>Inicia con tus redes sociales</h3>
            <ul class="redes">
                <li><a href=""><img src="../img/facebook.png" alt=""></a></li>
                <li><a href=""><img src="../img/instagram.png" alt=""></a></li>
                <li><a href=""><img src="../img/x.png" alt=""></a></li>
            </ul>
        </div>
    </div>
   </section>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <?php
       if(isset($error)){

      
    ?>
    <script>
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Credenciales incorrectas!",
      });
    </script>

    <?php  } ?>
   <!--<script src="../js/loginValidacion.js" defer></script>-->

</body>
</html>
