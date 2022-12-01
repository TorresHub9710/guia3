<?php

    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: ../HTML/principal.html");
    }
    session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <title>Formulario</title>    
    <link rel="stylesheet" href="../CSS/registro.css" />
    <script src="https://kit.fontawesome.com/20e83717b8.js" crossorigin="anonymous"></script>
</head>
<body>
<!------------------HEADER---------->
    <header>
        <div class="contenido-header">
            <div class="logo">
                <h1><a href="../PHP/principal.php">Futuristic<b>Cousine</a></b></h1>
            </div>
            <div class="menu" id="mostrar-menu">
                <nav>
                    <ul>
                        <li><a href="../PHP/principal.php"><i class="fa-solid fa-house"></i>Inicio</a></li>
                        <li><a href="../PHP/buscar.php"><i class="fa-solid fa-magnifying-glass"></i>Búsqueda</a></li>
                        <li><a href="../PHP/tips.php"><i class="fa-regular fa-lightbulb"></i>Tips</a></li>
                        <li><a href="../PHP/formulario.php"><i class="fa-solid fa-share-from-square"></i>Comparte</a></li>
                        <li><?php
                                session_start();
                                if(!isset($_SESSION['usuario'])) {
                                    echo '<a href="registro.php"><i class="fa-solid fa-address-card"></i>Iniciar Sesion</a>';
                                }else {
                                    echo '<a href="cerrar_sesion.php"><i class="fa-solid fa-door-open"></i>Cerrar Sesion</a>';
                                }
                            ?></li>
                    </ul>
                </nav>
            </div>
        </div>
        
        <div id="icono-menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>
    
    <div class="contenedor-principal" id="move-contenido">
<!---------------------PORTADA------------------>
        <div class="container-portada">
            <div class="container-text-portada">
                <h1>Haz parte de nuestra comunidad</h1>
                <p>Diligencia el siguiente formulario:<br>Así podras registrarte como usuario de FuturisticCousine y compartir tus recetas favoritas con los otros usuarios de esta comunidad.<br>¡Animate!</p>
            </div>
        </div>
    <!-----------------MAIN---------------------------->

    <main>
        <main class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para acceder</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--formulario de logueo y registro-->
            <div class="conenedor__login-register">
                <!--Formulario de logueo-->
                <form action="../PHP/inicio_sesion.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Entrar</button>
                </form>
                <!--Formulario de Registro-->
                <form action="../PHP/bd_registro.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Telefono" name="telefono">
                    <input type="date" placeholder="Fecha de Nacimiento" name="fecha_nacimiento">
                    <input type="text" placeholder="Dirección" name="direccion_domicilio">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Registrarse</button>
                </form>
            </div>
        </main>
    </main>

<!----------------------Footer------------------------>
    <div class="contenedor-footer">
        <footer>
            <div class="logo-footer">
                <img src="../img/Futuristic-Cousine.png" alt="logo FutristicCousine">
            </div>

            <div class="redes-sociales">
                <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f icono-footer"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram icono-footer"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter icono-footer"></i></a>
                <a href="https://co.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in icono-footer"></i></a>
            </div>

            <hr>
            <h4>&reg; 2022 Futuristic Cousine - Todos los derechos reservados</h4>
        </footer>
    </div>

    <script src="../JS/formulario.js"></script>
    <script src="../JS/registro.js"></script>
</body>
</html>