<?php

    session_start();

    include '../PHP/conexion.php';

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $validar_inicio = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and password='$password'");

    if(mysqli_num_rows($validar_inicio) > 0) {
        $_SESSION['usuario'] = $correo;
        header("location: ../PHP/principal.php");
        exit;
    }else {
        echo '
            <script>
                alert("El ususario ingresado no existe. Verifique sus datos, por favor");
                window.location = "../PHP/registro.php";
            </script>
        ';
        exit;
    }



?>