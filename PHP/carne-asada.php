<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <title>Futuristic Cousine - Carne Asada</title>
    <script src="https://kit.fontawesome.com/20e83717b8.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDQd32s3e1by8oKt_3Ewr-bq-kDlP7upZQ"></script>
    <script src="../JS/jquery-3.6.1.min.js"></script>
    <script src="../JS/jquery.gomap-1.3.3.min.js"></script>
    <link rel="stylesheet" href="../CSS/buscar.css">
</head>
<body>
    <!----------------------HEADER RECETA-------------------------------->
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
<!--------------------------------PORTADA RECERTA----------------------------->
        <div class="container-portada">
            <div class="container-text-portada">
                <h1>Carne Asada</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Magnam, voluptate perspiciatis odio quaerat eius beatae enim repudiandae, at quidem eum, saepe minima delectus voluptatem aspernatur aperiam fuga impedit inventore. Facere!</p>
            </div>
        </div>

        <div class="contenedor-receta">
            <img src="../img/receta-buscada-2.jpg" alt="carne-asada" class="imagen-receta">
            <div class="texto-receta">
                <table class="tabla-receta">
                    <tr>
                        <th><i class="fa-solid fa-hourglass-clock"></i>Tiempo de preparación</th>
                        <th>Número de ingredientes</th>
                        <th>Dificultad</th>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-stopwatch"></i>XX min</td>
                        <td><i class="fa-solid fa-basket-shopping"></i>##</td>
                        <td><i class="fa-solid fa-star icono-dificultad"></i><i class="fa-solid fa-star icono-dificultad"></i></td>
                    </tr>
                </table>
                <h2 class="titulos-receta">Ingredientes</h2>
                <ul class="lista-ingredientes">
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, perspiciatis?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt.</li>
                </ul>
                <h2 class="titulos-receta">Instrucciones</h2>
                <ol class="lista-instrucciones">
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, assumenda dignissimos nisi accusamus molestias dicta?</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, assumenda dignissimos nisi accusamus molestias dicta?</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, assumenda dignissimos nisi accusamus molestias dicta?</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, assumenda dignissimos nisi accusamus molestias dicta?</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, assumenda dignissimos nisi accusamus molestias dicta?</li>
                </ol>
                <h2 class="titulos-receta">Información Nutricional</h2>
                <table class="tabla-nutricional">
                    <tr>
                        <th>Calorias</th>
                        <th>Grasa</th>
                        <th>Carbohidratos</th>
                        <th>Proteina</th>
                    </tr>
                    <tr>
                        <td>###</td>
                        <td>### g</td>
                        <td>###</td>
                        <td>### g</td>
                    </tr>
                </table>
                <h2 class="titulos-receta">Contexto de la receta</h2>
                <p class="descripcion-receta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit enim beatae maiores consectetur sint non dignissimos obcaecati perferendis veritatis velit corporis quidem vel suscipit itaque eius quo, qui tempore cupiditate nesciunt, porro architecto voluptates minus vitae dolore? Quam sunt assumenda nihil blanditiis dicta illum sed temporibus alias aut inventore. Nisi deserunt ullam, nam unde ipsam dicta, tempora ad facere qui commodi tempore, amet maiores vero modi quis quam neque fuga ipsa earum ea deleniti! Suscipit odio quisquam autem officiis molestias.</p>
                <h3 id="titulo-mapa">Lugar de Origen de la Receta</h3>
                <div class="mapa" id="mapa2">

                </div>
            
            </div>
        </div>
    
    </div>
<!------------------------------FOOTER---------------------------------------->
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
    <script src="../JS/carne-asada.js"></script>
    <script src="../JS/buscar.js"></script>
</body>

</html>