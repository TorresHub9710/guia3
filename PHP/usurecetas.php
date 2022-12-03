<?php
include 'conexion.php';

$receta = $_POST ["receta"];
$correo = $_POST["correo"];
$tiempo = $_POST ["tiempo"];
$ingredientes = $_POST ["ingredientes"];
$instrucciones = $_POST ["instrucciones"];
$ruta="../imagenes/".$_FILES['imagen']['name'];
move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);


$query = "INSERT INTO urecetas(correo, receta, tiempo, ingredientes, instrucciones, imagen) VALUES ('$correo', '$receta','$tiempo','$ingredientes','$instrucciones','$ruta')";

$validar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

if(mysqli_num_rows($validar_correo)==0){
    echo '
        <script>
            alert("El correo que ingresó no corresponde a ningún usuario. Por favor utilizar el correo con el que se registró en nuetro sitio.");
            window.location = "../PHP/formulario.php";
        </script>
        ';
    exit;
}

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
