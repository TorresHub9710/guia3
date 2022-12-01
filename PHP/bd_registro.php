<?php

    include '../PHP/conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $direccion_domicilio = $_POST['direccion_domicilio'];
    $password = $_POST['password'];
    

    $query ="INSERT INTO usuarios(nombre_completo, correo, telefono, fecha_nacimiento, direccion_domicilio, password) 
            VALUES('$nombre_completo', '$correo', '$telefono', '$fecha_nacimiento', '$direccion_domicilio', '$password')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar) {
        echo '
            <script>
                alert("Usuario creado correctamente");
                window.location = "../PHP/registro.php";
            </script>
        ';
    }else {
        echo '
            <script>
                alert("Ocurrió un error en el registro. Inténtelo de nuevo.");
                window.location = "../PHP/registro.php";
            </script>
        ';
    }
    
    mysqli_close($conexion);
?>