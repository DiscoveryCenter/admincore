<?php

# Conteo para reporte de los diferentes estados de las hojas de vida


    require_once "conexion.php";

$sql = "SELECT COUNT(*) id FROM solicitud WHERE estado = 'Nuevo' ";
    $conteo = mysqli_query($mysqli, $sql);
    $fila = mysqli_fetch_assoc($conteo);
    $conteoNuevos = $fila["id"];

$sql = "SELECT COUNT(*) id FROM solicitud WHERE estado = 'Leido' ";
    $conteo = mysqli_query($mysqli, $sql);
    $fila = mysqli_fetch_assoc($conteo);
    $conteoLeidos = $fila["id"];

$sql = "SELECT COUNT(*) id FROM solicitud WHERE estado = 'Contratado' ";
    $conteo = mysqli_query($mysqli, $sql);
    $fila = mysqli_fetch_assoc($conteo);
    $conteoContratados = $fila["id"];

$sql = "SELECT COUNT(*) id FROM solicitud WHERE estado = 'Eliminado' ";
    $conteo = mysqli_query($mysqli, $sql);
    $fila = mysqli_fetch_assoc($conteo);
    $conteoEliminados = $fila["id"];
?>

