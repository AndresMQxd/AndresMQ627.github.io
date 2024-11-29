<?php session_start();
   if(isset($_SESSION['userdata'])){

    $user = $_SESSION['userdata'];
   }else{
    header("Location:../html/login.php");
}
   
?>

<?php
include "../php/conexion.php";
$sql="select * from Tandas order by id_tanda ASC";
$res = $conexion->query($sql) or die ($conexion->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/styleHome.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin:ital,wght@0,400..700;1,400..700&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="contenedor">
        <?php
        include "./aside.php";
        ?>
        <div class="main">
        <?php
        include "./topbar.php";
        ?>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">5</div>
                        <div class="cardName">Tandas activas</div>
                    </div>
                    <div class="iconBox">
                        <svg  width="24" height="24" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m11.998 5c-4.078 0-7.742 3.093-9.853 6.483-.096.159-.145.338-.145.517s.048.358.144.517c2.112 3.39 5.776 6.483 9.854 6.483 4.143 0 7.796-3.09 9.864-6.493.092-.156.138-.332.138-.507s-.046-.351-.138-.507c-2.068-3.403-5.721-6.493-9.864-6.493zm.002 3c2.208 0 4 1.792 4 4s-1.792 4-4 4-4-1.792-4-4 1.792-4 4-4zm0 1.5c1.38 0 2.5 1.12 2.5 2.5s-1.12 2.5-2.5 2.5-2.5-1.12-2.5-2.5 1.12-2.5 2.5-2.5z" fill-rule="nonzero"/></svg>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Participantes en total</div>
                    </div>
                    <div class="iconBox">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10.644 17.08c2.866-.662 4.539-1.241 3.246-3.682-3.932-7.427-1.042-11.398 3.111-11.398 4.235 0 7.054 4.124 3.11 11.398-1.332 2.455.437 3.034 3.242 3.682 2.483.574 2.647 1.787 2.647 3.889v1.031h-18c0-2.745-.22-4.258 2.644-4.92zm-12.644 4.92h7.809c-.035-8.177 3.436-5.313 3.436-11.127 0-2.511-1.639-3.873-3.748-3.873-3.115 0-5.282 2.979-2.333 8.549.969 1.83-1.031 2.265-3.181 2.761-1.862.43-1.983 1.34-1.983 2.917v.773z"/></svg>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$9,483</div>
                        <div class="cardName">Pagos por transferencia</div>
                    </div>
                    <div class="iconBox">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 8v-3c0-1.105.895-2 2-2h20c1.104 0 2 .895 2 2v3h-24zm24 3v8c0 1.104-.896 2-2 2h-20c-1.105 0-2-.896-2-2v-8h24zm-15 6h-6v1h6v-1zm3-2h-9v1h9v-1zm9 0h-3v1h3v-1z"/></svg>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$4,333</div>
                        <div class="cardName">Pagos en efectivo</div>
                    </div>
                    <div class="iconBox">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4 6v16h20v-16h-20zm10 13c-2.761 0-5-2.239-5-5s2.239-5 5-5 5 2.239 5 5-2.239 5-5 5zm.292-2.114v.614h-.584v-.582c-.603-.01-1.229-.154-1.75-.424l.266-.958c.558.216 1.3.445 1.881.315.671-.152.809-.842.068-1.175-.543-.251-2.205-.469-2.205-1.891 0-.795.605-1.508 1.74-1.663v-.622h.584v.593c.422.011.896.085 1.426.246l-.212.96c-.448-.156-.943-.3-1.425-.27-.868.051-.946.803-.339 1.118.998.469 2.301.818 2.301 2.068.001 1.002-.784 1.537-1.751 1.671zm6.708-12.886h-19v15h-2v-17h21v2z"/></svg>
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="recent">
                    <div class="cardHeader">
                        <h2>Historial Tandas</h2>
                        <a href="tandas.php" class="btn">Mas detalles</a>
                    </div>
                    <table>
                        <thead>
                            <tr class="negrita">
                                <td>Nombre</td>
                                <td>Miembros</td>
                                <td>Total</td>
                                <td>Estado</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          while($fila=mysqli_fetch_array($res)){
                          ?>
                            <tr>
                               
                                <td><?php echo $fila['nombre_tanda']?></td>
                                <td><?php echo $fila['num_participantes']?></td>
                                <td><?php echo $fila['cantidad']?></td>
                                <td>
                                    <?php 
                                        if($fila['estado'] == 'Activa'){
                                            echo '<span class="Activa status">Activa</span>';
                                        }else if($fila['estado'] == 'Pendiente'){
                                            echo '<span class="progreso status">Pendiente</span>';

                                        }else if($fila['estado'] == 'Finalizada'){
                                            echo '<span class="Finalizada status">Finalizada</span>';
                                        }
                                    
                                    ?> 
                                    </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="RecentCus">
                    <div class="cardHeader">
                        <h2>Tanda ISC - Miembros</h2>
                    </div>
                    <table>
                        <tbody>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../img/a.webp" alt=""></div></td>
                                <td><h4>Andres<br><span>1 adeudo</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../img/b.webp" alt=""></div></td>
                                <td><h4>Sebastian<br><span>0 adeudos</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../img/c.webp" alt=""></div></td>
                                <td><h4>Carlos<br><span>2 adeudos</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../img/d.webp" alt=""></div></td>
                                <td><h4>Brayan<br><span>1 adeudo</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../img/e.webp" alt=""></div></td>
                                <td><h4>Jocelyn<br><span>1 adeudos</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../img/f.webp" alt=""></div></td>
                                <td><h4>Aaron<br><span>0 adeudos</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../img/g.webp" alt=""></div></td>
                                <td><h4>Juan<br><span>0 adeudos</span></h4></td>
                            </tr>
                            <tr>
                                <td width="60px"><div class="imgBx"><img src="../img/h.webp" alt=""></div></td>
                                <td><h4>Diego<br><span>0 adeudos</span></h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togleMenu(){
            let toggle = document.querySelector('.toggle')
            let nav = document.querySelector('.nav')
            let main = document.querySelector('.main')
            toggle.classList.toggle('active')
            nav.classList.toggle('active')
            main.classList.toggle('active')
        }
    </script>
</body>
</html>