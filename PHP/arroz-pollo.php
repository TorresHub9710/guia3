<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <title>Futuristic Cousine - Arroz con pollo</title>
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
                <h1>Arroz con Pollo</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Magnam, voluptate perspiciatis odio quaerat eius beatae enim repudiandae, at quidem eum, saepe minima delectus voluptatem aspernatur aperiam fuga impedit inventore. Facere!</p>
            </div>
        </div>

        <div class="contenedor-receta">
            <img src="../img/receta-buscada-1.jpg" alt="Arroz con pollo" class="imagen-receta">
            <div class="texto-receta">
                <table class="tabla-receta">
                    <tr>
                        <th><i class="fa-solid fa-hourglass-clock"></i>Tiempo de preparación</th>
                        <th>Número de ingredientes</th>
                        <th>Dificultad</th>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-stopwatch"></i>35 min</td>
                        <td><i class="fa-solid fa-basket-shopping"></i>13</td>
                        <td><i class="fa-solid fa-star icono-dificultad"></i><i class="fa-solid fa-star icono-dificultad"></i></td>
                    </tr>
                </table>
                <h2 class="titulos-receta">Ingredientes</h2>
                <ul class="lista-ingredientes">
                    <li>4 Pechugas de pollo, cocidas y cortadas en trozos pequeños</li>
                    <li>3 Cucharadas de aceite de canola</li>
                    <li>1 Pimentón rojo grande, picado</li>
                    <li>1 Pimentón amarillo grande, picado</li>
                    <li>1 Pimentón verde grande, picado</li>
                    <li>1 Diente de ajo, machacado</li>
                    <li>1 Cebolla cabezona mediana, picada</li>
                    <li>3 Tazas de arroz</li>
                    <li>5 Tazas de agua</li>
                    <li>2 Tazas de verduras variadas en trocitos (zanahoria, alverja o chícharos, habichuela o frijol, maíz amarillo)</li>
                    <li>1 Cubo de caldo de pollo</li>
                    <li>1 Sobre de sazón con azafrán</li>
                    <li>Sal al gusto</li>
                </ul>
                <h2 class="titulos-receta">Instrucciones</h2>
                <ol class="lista-instrucciones">
                    <li>Colocar el aceite en una olla grande a fuego bajo. Sofreir los tres pimentones picados, el ajo y la cebolla cabezona y revolver hasta que tomen un color dorado.</li>
                    <li>Agregar las 3 tazas de arroz, lo más importante aquí es revolver muy bien.</li>
                    <li>Añadir las 5 tazas de agua, las verduras en trocitos, las pechugas de pollo, el cubo de caldo de pollo, el sobre de sazón y la sal al gusto. Revolver y dejar cocinar a fuego medio por aproximadamente 15 minutos o hasta que se seque el arroz.</li>
                    <li>Una vez que el arroz haya absorbido toda el agua se debe tapar la olla y cocinar a fuego bajo por 10 a 15 minutos más hasta que el arroz esté suave.</li>
                    <li>Luego de esto solo quedaría servir las porciones que se vayan a consumir.</li>
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
                        <td>299</td>
                        <td>10,88 g</td>
                        <td>38,01</td>
                        <td>11,32 g</td>
                    </tr>
                </table>
                <h2 class="titulos-receta">Contexto de la Receta</h2>
                <p class="descripcion-receta">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit enim beatae maiores consectetur sint non dignissimos obcaecati perferendis veritatis velit corporis quidem vel suscipit itaque eius quo, qui tempore cupiditate nesciunt, porro architecto voluptates minus vitae dolore? Quam sunt assumenda nihil blanditiis dicta illum sed temporibus alias aut inventore. Nisi deserunt ullam, nam unde ipsam dicta, tempora ad facere qui commodi tempore, amet maiores vero modi quis quam neque fuga ipsa earum ea deleniti! Suscipit odio quisquam autem officiis molestias.</p>
                <h3 id="titulo-mapa">Lugar de Origen de la Receta</h3>
                <div class="mapa" id="mapa1">

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

    <script src="../JS/arroz-pollo.js"></script>
    <script src="../JS/buscar.js"></script>
    
</body>

</html>