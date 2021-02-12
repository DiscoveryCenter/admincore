<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../build/js/sweetalert.js"></script>
    <title>Cerrar Sesión</title>
</head>
<body>
    
</body>
</html>

<?php
require_once "../model/conexion.php";
    session_start();
    session_destroy();
    session_unset();
    mysqli_close($mysqli);

    echo '
    <script type="text/javascript">
    swal({
        title: "Exito !",
        text: "Sesión Cerrada Exitosamente.",
        icon: "success",
        button: "Aceptar",
    }).then(function() {
        window.location = "../index.php";
    });
    </script>
    ';
?>