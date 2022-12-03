<?php

include "conexion.php";
date_default_timezone_set("America/Bogota");

$ip = $_SERVER['REMOTE_ADDR'];

$sqlConsultar = $conexion->query("SELECT * FROM contador WHERE ip = '$ip' ORDER BY id desc");
$contarConsultar = $sqlConsultar->num_rows;

if($contarConsultar == 0) {
    $sqlInsertar = $conexion->query("INSERT INTO contador(ip,fecha) VALUES('$ip',now())");
}else {
    $fila = $sqlConsultar->fetch_array();
    $fechaRegistro = $fila['fecha'];
    $fecha_actual = date("Y-m-d H:i:s");
    $nuevaFecha = strtotime($fechaRegistro . "+ 1 hour");
    $nuevaFecha = date("Y-m-d H:i:s", $nuevaFecha);

    if($fecha_actual >= $nuevaFecha) {
        $sqlInsertar = $conexion->query("INSERT INTO contador(ip,fecha) VALUES('$ip',now())");
    } 
}

$visitas = $conexion->query("SELECT * FROM contador");
$contar = $visitas ->num_rows;

echo $contar;

?>

