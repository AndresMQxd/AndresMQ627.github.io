<?php
include "../php/conexion.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../css/styleRegistro.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Oswald:wght@200..700&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
   <section>
    <div class="contenidoBx">
        <div class="formBx">
            <h2>Registro</h2>
            <form action="../php/regsitrarUsuario.php" method="POST">
                <div class="inputBx">
                    <span>Nombre completo</span>
                    <input type="text" id="name" name="txtName" required placeholder="Tu nombre">
                    
                </div>
                <div class="inputBx">
                    <span>Correo</span>
                    <input type="email" id="email" name="txtEmail" required placeholder="ejemplo@dominio.com">
                   
                </div>
                <div class="inputBx">
                    <span>Contraseña</span>
                    <input type="password" id="password" name="txtPass" required minlength="8" placeholder="Mínimo 8 caracteres">
                   
                </div>
                <div>
                    <label for="user-role" style="color: aliceblue;">Selecciona tu rol:</label>
                    <select required id="user-role" name="txtRol">
                      <option value="" disabled selected>Elige una opción</option>
                      <option value="Administrador">Administrador</option>
                      <option value="Participante">Participante</option>
                    </select>
                </div>
                <br>
                <div class="inputBx">
                    <input type="submit" value="Crear cuenta" >
                </div>
                
                <div class="inputBx">
                    <p>Ya tienes cuenta? <a href="login.php">Iniciar sesión</a></p>
                </div>
            </form>
            <h3>Resgístrate con tus redes sociales</h3>
            <ul class="redes">
                <li><a href=""><img src="../img/facebook.png" alt="Facebook"></a></li>
                <li><a href=""><img src="../img/instagram.png" alt="Instagram"></a></li>
                <li><a href=""><img src="../img/x.png" alt="X"></a></li>
            </ul>
        </div>
    </div>
   </section>
   <script>
    function redirigir(event) {
        event.preventDefault(); 
        const form = event.target.closest('form'); 
        if (form.checkValidity()) { 
            window.location.href = 'login.html';
        } else {
            Swal.fire("Complete los campos correctamnete!");
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="../js/loginValidacion.js" defer></script>
</body>
</html>
