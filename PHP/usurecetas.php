<?php
include 'conexionre.php';

$receta = $_POST ["receta"];
$tiempo = $_POST ["tiempo"];
$ingredientes = $_POST ["ingredientes"];
$instrucciones = $_POST ["instrucciones"];
$ruta="../imagenes/".$_FILES['imagen']['name'];
move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);


$query = "INSERT INTO urecetas(receta, tiempo, ingredientes, instrucciones, imagen) VALUES ('$receta','$tiempo','$ingredientes','$instrucciones','$ruta')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
        alert ("Mensaje enviado exitosamente");
        window.location = "./formulario.php";
     </script>
     ';
}

?>
