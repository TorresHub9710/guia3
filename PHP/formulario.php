<?php

    session_start();  /*Iniciando Sesión*/

    if(!isset($_SESSION['usuario'])) {  /*Si no exiiste la sesión se ejecuta el código de abajo*/
        echo '
            <script>
                alert("Se debe iniciar sesión antes de compartir tu receta");
                window.location = "registro.php"
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <title>Formulario</title>    
    <link rel="stylesheet" href="../CSS/formulario.css" />
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
                        <li class="menu-selected"><a href="../PHP/formulario.php" class="text-menu-selected"><i class="fa-solid fa-share-from-square"></i>Comparte</a></li>
                        <li><a href="cerrar_sesion.php"><i class="fa-solid fa-door-open"></i>Cerrar Sesion</a></li>
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
                <h1>Comparte tus recetas con los demás</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Magnam, voluptate perspiciatis odio quaerat eius beatae enim repudiandae, at quidem eum, saepe minima delectus voluptatem aspernatur aperiam fuga impedit inventore. Facere!</p>
            </div>
        </div>
    <!-----------------MAIN---------------------------->
<div class="formulario">
        <form action="usurecetas.php" class="form-recetas" method="post"  enctype="multipart/form-data" onsubmit="return validar();">
        <h2 class="form-titulo">Ingresa aquí los datos</h2>
        <div class ="container--flex">
            <label for ="" class ="form--label">Titulo de tu Receta:</label>
            <input type="text" class="form-input" name="receta" id="receta">
        </div>

        <div class ="container--flex">
            <label for ="" class ="form--label">Tiempo de preparación:</label>
            <input type="text" class="form-input" name="tiempo" id="tiempo">
        </div>

        <div class ="container--flex">
            <label for ="" class ="form--label">Lista de ingredientes:</label>
            <input type="text" class="form-input" name="ingredientes" id="ingredientes">
        </div>

        <div class ="container--flex">
            <label for ="" class ="form--label">Descripción e instrucciones:</label>
            <input type="text" class="form-input" name="instrucciones" id="instrucciones">
        </div>



        <div class ="container--flex">
            <label for ="" class ="form--label">Coloca una imagen de portada:</label>
            <input type="file" class="form-file" name="imagen" >
        </div>
        <input type="submit" class="form-submit">


        
    </form>
    </div>
    <script src="http://localhost/Formulario/JS/formulario.js"></script>

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

</body>
</html>