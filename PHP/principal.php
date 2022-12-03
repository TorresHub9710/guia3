
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Full Screen Slider</title>
    <link rel="stylesheet" href="../CSS/principal.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&family=Lato:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Dosis&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>

<body>
    <section id="Inicio">
        <header>
            <nav class="menu">
                <a href="../PHP/principal.php" class="logo">Futuristic <span>Cousine</span></a>
                <div class="menu-links" id="menu-links">
                    <ul>
                        <li><a href="../PHP/principal.php">Inicio</a></li>
                        <li><a href="../PHP/buscar.php">Búsqueda</a></li>
                        <li><a href="../PHP/tips.php">Tips</a></li>
                        <li><a href="../PHP/formulario.php">Comparte</a></li>
                        <li><?php
                                session_start();
                                if(!isset($_SESSION['usuario'])) {
                                    echo '<a href="registro.php">Iniciar Sesion</a>';
                                }else {
                                    echo '<a href="cerrar_sesion.php">Cerrar Sesion</a>';
                                }
                            ?></li>
                    </ul>
                </div>
                <button class="menu-ham" id="menu-ham">
                    |||
                </button>
            </nav>
        </header>

        <div class="contador-visitas">
            <?php
                include "contador.php";
            ?>
        </div>                        

        <div class="slider">
            <div class="slide current">
                <div class="content">
                    <h1>Búsqueda</h1>
                    <p>
                        Busca las mejores recetas
                    </p>

                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h1>Tips de cocina </h1>
                    <p>
                        Consejos de cocina para tu hogar
                    </p>

                </div>
            </div>
            <div class="slide">
                <div class="content">
                    <h1>Comparte</h1>
                    <p>
                        Comparte tus creaciones con la comunidad
                    </p>
                </div>
            </div>

        </div>

        <div class="buttons">
            <button id="prev"><i class="fas fa-arrow-left"></i></button>
            <button id="next"><i class="fas fa-arrow-right"></i></button>
        </div>
        

        <script src="../JS/principal.js"></script>
    </section>
</body>

</html>