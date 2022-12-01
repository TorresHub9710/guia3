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
        <div id="container">
            <h3>Ingresa aquí los datos</h3>
            <form>
                <p>Titulo de tu Receta:</p>
                <input type="text" class="input-text" name="recetaName" id="recetaName" placeholder="Digite el Nombre de la Receta">
            </form>
                <br>
                <br>
            <form>
                <p>Tiempo de preparación:</p>
                <input type="time" class="input-text" name="cookTime" id="cookTime">
            </form>
                <br>
                <br>
            <form>
                <p>Lista de ingredientes:</p>
                <input type="text" class="input-text" name="ingredients" id="ingredients" placeholder="Liste aqui sus ingredientes">
            </form>
                <br>
                <br>
            <form>
                <p>Descripción e instrucciones:</p>
                <input type="text" class="input-text" name="" id="descripcion_E_Instruciones" placeholder="Descripcion e Instrucciones">
            </form>
            <br>
            <form>
                <p>Sube un video de preparación (Opcional):</p>
                <input type="text" class="input-text" name="video" id="video" placeholder="Link del video">
                <button class="button"><span>Cargar vídeo</span></button>

            </form>
                <br>
            <form>
                <p>Coloca una imagen de portada (Opcional):</p>
                <input type="text" class="input-text" name="image" id="image" placeholder="Link de la imagen">
                <button class="button">Cargar imagen</button>    

            </form>
            <br>
            <br>
            <button class="button" id="botonGuardar" onclick="captura()"><span>Comparte</span></button>    
        </div>
    </div>

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