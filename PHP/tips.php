
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../CSS/tips.css">
    <script src="https://kit.fontawesome.com/20e83717b8.js" crossorigin="anonymous"></script>
    <title>Tips de cocina</title>

</head>

<body>
    <!----------------HEADER------------------->
    <header>
        <div class="contenido-header">
            <div class="logo">
                <h1><a href="../PHP/principal.php">Futuristic<b>Cousine</b></a></h1>
            </div>
            <div class="menu" id="mostrar-menu">
                <nav>
                    <ul>
                        <li><a href="../PHP/principal.php"><i class="fa-solid fa-house"></i>Inicio</a></li>
                        <li><a href="../PHP/buscar.php"><i class="fa-solid fa-magnifying-glass"></i>Búsqueda</a></li>
                        <li class="menu-selected"><a href="../PHP/tips.php" class="text-menu-selected"><i class="fa-regular fa-lightbulb"></i>Tips</a></li>
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
    <!----------------MAIN------------------->
    <div class="contenedor-principal" id="move-contenido">

        <div class="container-portada">
            <div class="container-text-portada">
                <h1>Tips de Cocina</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magnam, voluptate perspiciatis odio quaerat eius beatae enim repudiandae, at quidem eum, saepe
                    minima delectus voluptatem aspernatur aperiam fuga impedit inventore. Facere!</p>
            </div>
        </div>
        <!--------------Consejos----------------->
        <h3 id="titulo-seccion">Consejos</h3>
        <div class="container-tips">

            <div class="box">
                <h3>Tip numero uno</h3>
                <img src="../img/uno.jpg" alt="Tip numero uno">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto earum maiores unde itaque tempora
                    possimus sequi, debitis consequuntur rerum aliquam repellat recusandae nihil ipsa. Aut consequuntur
                    quasi odio sapiente vero tempore, atque quibusdam maxime consequatur magnam ea quam laboriosam
                    possimus similique eum! Distinctio ut cumque recusandae in ea, quam laborum?</p>
            </div>

            <div class="box">
                <h3>Tip numero dos</h3>
                <img src="../img/dos.jpg" alt="Tip numero dos">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto numquam ut voluptatem itaque, nisi
                    enim illo beatae corrupti repudiandae quo aliquid, ipsa magnam mollitia cumque quod minima ea
                    voluptas. Voluptates tempore dolor placeat quod odio, dicta minima? Exercitationem minus ullam
                    eaque. Quod commodi deserunt ipsam assumenda qui voluptatem voluptas delectus.</p>
            </div>

            <div class="box">
                <h3>Tip numero tres</h3>
                <img src="../img/tres.jpg" alt="Tip numero tres">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto numquam ut voluptatem itaque, nisi
                    enim illo beatae corrupti repudiandae quo aliquid, ipsa magnam mollitia cumque quod minima ea
                    voluptas. Voluptates tempore dolor placeat quod odio, dicta minima? Exercitationem minus ullam
                    eaque. Quod commodi deserunt ipsam assumenda qui voluptatem voluptas delectus.</p>
            </div>

            <div class="box">
                <h3> Tip numero cuatro</h3>
                <img src="../img/cuatro.jpg" alt="Tip numero cuatro">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto numquam ut voluptatem itaque, nisi
                    enim illo beatae corrupti repudiandae quo aliquid, ipsa magnam mollitia cumque quod minima ea
                    voluptas. Voluptates tempore dolor placeat quod odio, dicta minima? Exercitationem minus ullam
                    eaque. Quod commodi deserunt ipsam assumenda qui voluptatem voluptas delectus.</p>
            </div>

            <div class="box">
                <h3>Tip numero cinco</h3>
                <img src="../img/cinco.jpg" alt="Tip numero cinco">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto numquam ut voluptatem itaque, nisi
                    enim illo beatae corrupti repudiandae quo aliquid, ipsa magnam mollitia cumque quod minima ea
                    voluptas. Voluptates tempore dolor placeat quod odio, dicta minima? Exercitationem minus ullam
                    eaque. Quod commodi deserunt ipsam assumenda qui voluptatem voluptas delectus.</p>
            </div>

            <div class="box">
                <h3>Tip numero seis</h3>
                <img src="../img/seis.jpg" alt="Tip numero seis">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto numquam ut voluptatem itaque, nisi
                    enim illo beatae corrupti repudiandae quo aliquid, ipsa magnam mollitia cumque quod minima ea
                    voluptas. Voluptates tempore dolor placeat quod odio, dicta minima? Exercitationem minus ullam
                    eaque. Quod commodi deserunt ipsam assumenda qui voluptatem voluptas delectus.</p>
            </div>
        </div>
    </div>
    <!-------------FOOTER-------------------->
    <div class="contenedor-footer">
        <footer>
            <div class="logo-footer">
                <img src="../img/Futuristic-Cousine.png" alt="logo FutristicCousine">
            </div>

            <div class="redes-sociales">
                <a href="https://www.facebook.com/" target="_blank"><i
                        class="fa-brands fa-facebook-f icono-footer"></i></a>
                <a href="https://www.instagram.com/" target="_blank"><i
                        class="fa-brands fa-instagram icono-footer"></i></a>
                <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter icono-footer"></i></a>
                <a href="https://co.linkedin.com/" target="_blank"><i
                        class="fa-brands fa-linkedin-in icono-footer"></i></a>
            </div>

            <hr>
            <h4>&reg; 2022 Futuristic Cousine - Todos los derechos reservados</h4>
            <h3 id="titulo-contador">Contador de Visitas</h3>
            <div class="contador-visitas">
                <p>
                    <?php
                    include "contador.php";
                    ?>
                </p>
            </div>
        </footer>
    </div>


    <script src="../JS/formulario.js"></script>
</body>

</html>