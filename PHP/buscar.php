<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <title>Futuristic Cousine</title>
    <script src="https://kit.fontawesome.com/20e83717b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/buscar.css">
</head>
<body>
    <!------------HEADER - MENU---------------->

    <header>
        <div class="contenido-header">
            <div class="logo">
                <h1><a href="../PHP/principal.php">Futuristic<b>Cousine</b></a></h1>
            </div>
            <div class="menu" id="mostrar-menu">
                <nav>
                    <ul>
                        <li><a href="../PHP/principal.php"><i class="fa-solid fa-house"></i>Inicio</a></li>
                        <li class="menu-selected"><a href="../PHP/buscar.php" class="text-menu-selected"><i class="fa-solid fa-magnifying-glass"></i>Búsqueda</a></li>
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
    <!------------PORTADA---------------->

        <div class="container-portada">
            <div class="container-text-portada">
                <h1>¿Qué vas a comer hoy?</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Magnam, voluptate perspiciatis odio quaerat eius beatae enim repudiandae, at quidem eum, saepe minima delectus voluptatem aspernatur aperiam fuga impedit inventore. Facere!</p>
            </div>
        </div>
    <!--------BARRA BUSCAR-------------->
        <div id="barra-busqueda">
        <input type="text" id="input-busqueda" placeholder="Cuentanos tu antojo de hoy">
        </div>

        <ul id="caja-busqueda">
        <li><a href="../PHP/arroz-pollo.php"><i class="fa-solid fa-magnifying-glass"></i>Arroz con pollo</a></li>
        <li><a href="../PHP/carne-asada.php"><i class="fa-solid fa-magnifying-glass"></i>Carne asada</a></li>
        <li><a href="../PHP/pechuga-plancha.php"><i class="fa-solid fa-magnifying-glass"></i>Pechuga a la plancha</a></li>
        <li><a href="../PHP/ensalada-diaria.php"><i class="fa-solid fa-magnifying-glass"></i>Ensalada diaria</a></li>
        <li><a href="../PHP/camarones-salteados.php"><i class="fa-solid fa-magnifying-glass"></i>Camarones Saletados</a></li>
        <li><a href="../PHP/papas-horneadas.php"><i class="fa-solid fa-magnifying-glass"></i>Papas horneadas</a></li>
        </ul>

        

    <!-------RECETAS MÁS BUSCADAS---------->

        <h1 id="titulo-seccion">Recetas más Buscadas</h1>
        <div class="recetas-buscadas" id="recetas">
            <article>
                <h2>Arroz con Pollo</h2>
                    <div class="contenido-article">
                        <img src="../img/receta-buscada-1.jpg" alt="Arroz con Pollo">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Animi impedit hic aliquid unde saepe velit officiis dignissimos minus repudiandae pariatur totam, 
                        possimus aut laboriosam, rerum at aliquam dolores libero.
                        Pariatur hic molestias temporibus, esse dolor tempore neque eos recusandae, 
                        porro laborum maxime perferendis minus velit! Quis dolorum voluptatum debitis voluptate!</p>
                        <a href="../PHP/arroz-pollo.php"><button>Aprende esta receta</button></a>
                    </div>
            </article>
            <article>
                <h2>Carne Asada</h2><div class="contenido-article">
                    <img src="../img/receta-buscada-2.jpg" alt="Carne Asada">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Animi impedit hic aliquid unde saepe velit officiis dignissimos minus repudiandae pariatur totam, 
                    possimus aut laboriosam, rerum at aliquam dolores libero.
                    Pariatur hic molestias temporibus, esse dolor tempore neque eos recusandae, 
                    porro laborum maxime perferendis minus velit! Quis dolorum voluptatum debitis voluptate!</p>
                    <a href="../PHP/carne-asada.php"><button>Aprende esta receta</button></a>
                </div>
            </article>
            <article>
                <h2>Pechuga a la plancha</h2><div class="contenido-article">
                    <img src="../img/receta-buscada-3.jpg" alt="Pechuga a la plancha">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Animi impedit hic aliquid unde saepe velit officiis dignissimos minus repudiandae pariatur totam, 
                    possimus aut laboriosam, rerum at aliquam dolores libero.
                    Pariatur hic molestias temporibus, esse dolor tempore neque eos recusandae, 
                    porro laborum maxime perferendis minus velit! Quis dolorum voluptatum debitis voluptate!</p>
                    <a href="../PHP/pechuga-plancha.php"><button>Aprende esta receta</button></a>
                </div>
            </article>
            <article>
                <h2>Ensalada Diaria</h2><div class="contenido-article">
                    <img src="../img/receta-buscada-4.jpg" alt="Ensalada">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Animi impedit hic aliquid unde saepe velit officiis dignissimos minus repudiandae pariatur totam, 
                    possimus aut laboriosam, rerum at aliquam dolores libero.
                    Pariatur hic molestias temporibus, esse dolor tempore neque eos recusandae, 
                    porro laborum maxime perferendis minus velit! Quis dolorum voluptatum debitis voluptate!</p>
                    <a href="../PHP/ensalada-diaria.php"><button>Aprende esta receta</button></a>
                </div>
            </article>
            <article>
                <h2>Camarones Salteados</h2><div class="contenido-article">
                    <img src="../img/receta-buscada-5.jpg" alt="Camarones">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Animi impedit hic aliquid unde saepe velit officiis dignissimos minus repudiandae pariatur totam, 
                    possimus aut laboriosam, rerum at aliquam dolores libero.
                    Pariatur hic molestias temporibus, esse dolor tempore neque eos recusandae, 
                    porro laborum maxime perferendis minus velit! Quis dolorum voluptatum debitis voluptate!</p>
                    <a href="../PHP/camarones-salteados.php"><button>Aprende esta receta</button></a>
                </div>
            </article>
            <article>
                <h2>Papas Horneadas</h2><div class="contenido-article">
                    <img src="../img/receta-buscada-6.jpg" alt="Papas">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Animi impedit hic aliquid unde saepe velit officiis dignissimos minus repudiandae pariatur totam, 
                    possimus aut laboriosam, rerum at aliquam dolores libero.
                    Pariatur hic molestias temporibus, esse dolor tempore neque eos recusandae, 
                    porro laborum maxime perferendis minus velit! Quis dolorum voluptatum debitis voluptate!</p>
                    <a href="../PHP/papas-horneadas.php"><button>Aprende esta receta</button></a>
                </div>
            </article>
        </div>

    </div>

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
    
    


    <script src="../JS/buscar.js"></script>
</body>
</html>