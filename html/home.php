<?php session_start();
   if(isset($_SESSION['userdata'])){

    $user = $_SESSION['userdata'];
   }else{
    header("Location:../html/login.php");
}
   
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
        <div class="nav">
            <ul>
                <li>
                    <a href="">
                        <span class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path d="M16.5 2.75c-.965 0-1.75.785-1.75 1.75s.785 1.75 1.75 1.75 1.75-.785 1.75-1.75-.785-1.75-1.75-1.75zm0-2.75c2.481 0 4.5 2.019 4.5 4.5s-2.019 4.5-4.5 4.5-4.5-2.019-4.5-4.5 2.019-4.5 4.5-4.5zm-5.5 17.01s2.539 3.087 4.022 4.944c1.163 1.454 2.025 2.046 3.462 2.046 1.411 0 2.516-1.065 2.516-2.309 0-.539-.183-1.111-.594-1.646-1.52-1.973-2.406-3.035-2.406-3.035h-7zm-3.136-.01h-2.864c-.551 0-1-.449-1-1s.449-1 1-1h13.279c.893 0 1.4.248 1.963.958.96 1.211 2.505 3.163 2.562 3.251.736-.87 1.196-1.98 1.196-3.209 0-2.761-2.239-5-5-5h-14c-2.761 0-5 2.239-5 5s2.239 5 5 5h6.141c-1.144-1.405-3.277-4-3.277-4zm.05-12.5l2.086 2.086-1.414 1.414-2.086-2.086-2.086 2.086-1.414-1.414 2.086-2.086-2.086-2.086 1.414-1.414 2.086 2.086 2.086-2.086 1.414 1.414-2.086 2.086z"/></svg></span>
                        <span class="titulo"><h1>TANDALOOP</h1></span>
                    </a>
                </li>
                <li>
                    <a href="home.html">
                        <span class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 6.453l9 8.375v9.172h-6v-6h-6v6h-6v-9.172l9-8.375zm12 5.695l-12-11.148-12 11.133 1.361 1.465 10.639-9.868 10.639 9.883 1.361-1.465z"/></svg></i></span>
                        <span class="titulo">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="tandas.html">
                        <span class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 7v15h-24v-20h6.938c1.812 3.188 2.281 5 6 5h11.062zm-10.891-2h10.891v-3h-14.604c1.39 2.574 1.63 3 3.713 3z"/></svg></span>
                        <span class="titulo">Tandas</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icono"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.502 19.525c1.524-1.105 2.498-2.738 2.498-4.554 0-3.326-3.237-6.023-7.229-6.023s-7.229 2.697-7.229 6.023c0 3.327 3.237 6.024 7.229 6.024.825 0 1.621-.117 2.36-.33l.212-.032c.139 0 .265.043.384.111l1.583.914.139.045c.133 0 .241-.108.241-.241l-.039-.176-.326-1.215-.025-.154c0-.162.08-.305.202-.392zm-12.827-17.228c-4.791 0-8.675 3.236-8.675 7.229 0 2.178 1.168 4.139 2.997 5.464.147.104.243.276.243.471l-.03.184-.391 1.458-.047.211c0 .16.13.29.289.29l.168-.054 1.899-1.097c.142-.082.293-.133.46-.133l.255.038c.886.255 1.842.397 2.832.397l.476-.012c-.188-.564-.291-1.158-.291-1.771 0-3.641 3.542-6.593 7.911-6.593l.471.012c-.653-3.453-4.24-6.094-8.567-6.094zm5.686 11.711c-.532 0-.963-.432-.963-.964 0-.533.431-.964.963-.964.533 0 .964.431.964.964 0 .532-.431.964-.964.964zm4.82 0c-.533 0-.964-.432-.964-.964 0-.533.431-.964.964-.964.532 0 .963.431.963.964 0 .532-.431.964-.963.964zm-13.398-5.639c-.639 0-1.156-.518-1.156-1.156 0-.639.517-1.157 1.156-1.157.639 0 1.157.518 1.157 1.157 0 .638-.518 1.156-1.157 1.156zm5.783 0c-.639 0-1.156-.518-1.156-1.156 0-.639.517-1.157 1.156-1.157.639 0 1.157.518 1.157 1.157 0 .638-.518 1.156-1.157 1.156z"/></svg></span>
                        <span class="titulo">Mensajes</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 18.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25c.691 0 1.25.56 1.25 1.25s-.559 1.25-1.25 1.25zm1.961-5.928c-.904.975-.947 1.514-.935 2.178h-2.005c-.007-1.475.02-2.125 1.431-3.468.573-.544 1.025-.975.962-1.821-.058-.805-.73-1.226-1.365-1.226-.709 0-1.538.527-1.538 2.013h-2.01c0-2.4 1.409-3.95 3.59-3.95 1.036 0 1.942.339 2.55.955.57.578.865 1.372.854 2.298-.016 1.383-.857 2.291-1.534 3.021z"/></svg></span>
                        <span class="titulo">Ayuda</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M17 12.645v-2.289c-1.17-.417-1.907-.533-2.28-1.431-.373-.9.07-1.512.6-2.625l-1.618-1.619c-1.105.525-1.723.974-2.626.6-.9-.374-1.017-1.117-1.431-2.281h-2.29c-.412 1.158-.53 1.907-1.431 2.28h-.001c-.9.374-1.51-.07-2.625-.6l-1.617 1.619c.527 1.11.973 1.724.6 2.625-.375.901-1.123 1.019-2.281 1.431v2.289c1.155.412 1.907.531 2.28 1.431.376.908-.081 1.534-.6 2.625l1.618 1.619c1.107-.525 1.724-.974 2.625-.6h.001c.9.373 1.018 1.118 1.431 2.28h2.289c.412-1.158.53-1.905 1.437-2.282h.001c.894-.372 1.501.071 2.619.602l1.618-1.619c-.525-1.107-.974-1.723-.601-2.625.374-.899 1.126-1.019 2.282-1.43zm-8.5 1.689c-1.564 0-2.833-1.269-2.833-2.834s1.269-2.834 2.833-2.834 2.833 1.269 2.833 2.834-1.269 2.834-2.833 2.834zm15.5 4.205v-1.077c-.55-.196-.897-.251-1.073-.673-.176-.424.033-.711.282-1.236l-.762-.762c-.52.248-.811.458-1.235.283-.424-.175-.479-.525-.674-1.073h-1.076c-.194.545-.25.897-.674 1.073-.424.176-.711-.033-1.235-.283l-.762.762c.248.523.458.812.282 1.236-.176.424-.528.479-1.073.673v1.077c.544.193.897.25 1.073.673.177.427-.038.722-.282 1.236l.762.762c.521-.248.812-.458 1.235-.283.424.175.479.526.674 1.073h1.076c.194-.545.25-.897.676-1.074h.001c.421-.175.706.034 1.232.284l.762-.762c-.247-.521-.458-.812-.282-1.235s.529-.481 1.073-.674zm-4 .794c-.736 0-1.333-.597-1.333-1.333s.597-1.333 1.333-1.333 1.333.597 1.333 1.333-.597 1.333-1.333 1.333z"/></svg></span>
                        <span class="titulo">Ajustes</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 8v-3c0-1.105.895-2 2-2h20c1.104 0 2 .895 2 2v3h-24zm24 3v8c0 1.104-.896 2-2 2h-20c-1.105 0-2-.896-2-2v-8h24zm-15 6h-6v1h6v-1zm3-2h-9v1h9v-1zm9 0h-3v1h3v-1z"/></svg></span>
                        <span class="titulo">Pagos</span>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <span class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8 12v-4l8 7-8 7v-4h-8v-6h8zm2-5.024v-2.976h6v8.051l8 6.767v-16.818h-16v3.284l2 1.692z"/></svg></span>
                        <span class="titulo">Cerrar Sesión</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="togleMenu()"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg></div>
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Buscar">
                        <svg class="fa" xmlns="http://www.w3.org/2000/svg" width="10" height="10" ><path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/></svg>
                    </label>
                </div>
                <div class="user">
                    <img src="../img/userr.jfif" width="70" height="70">
                </div>
            </div>
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
                        <a href="" class="btn">Mas detalles</a>
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
                            <tr class="negrita">
                                <td>Tanda Navidad</td>
                                <td>5</td>
                                <td>$5,000</td>
                                <td><span class="status Activa">Activa</span></td>
                            </tr>
                            <tr class="negrita">
                                <td>Tanda SuhiBox</td>
                                <td>7</td>
                                <td>$4,500</td>
                                <td><span class="status Activa">Activa</span></td>
                            </tr>
                            <tr class="negrita">
                                <td>Tanda TecNCG</td>
                                <td>9</td>
                                <td>$3,000</td>
                                <td><span class="status progreso">En progreso</span></td>
                            </tr>
                            <tr class="negrita">
                                <td>Tanda ISC</td>
                                <td>8</td>
                                <td>$8,000</td>
                                <td><span class="status Finalizada">Finalizada</span></td>
                            </tr>
                            <tr class="negrita">
                                <td>Tanda Gym</td>
                                <td>12</td>
                                <td>$9,000</td>
                                <td><span class="status Activa">Activa</span></td>
                            </tr>
                            <tr class="negrita">
                                <td>Tanda Pollo</td>
                                <td>15</td>
                                <td>$10,000</td>
                                <td><span class="status Activa">Activa</span></td>
                            </tr>
                            <tr class="negrita">
                                <td>Tanda Vecinos</td>
                                <td>13</td>
                                <td>$10,000</td>
                                <td><span class="status progreso">En progreso</span></td>
                            </tr>
                            <tr class="negrita">
                                <td>Tanda Familia</td>
                                <td>11</td>
                                <td>$7,000</td>
                                <td><span class="status Activa">Activa</span></td>
                            </tr>
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