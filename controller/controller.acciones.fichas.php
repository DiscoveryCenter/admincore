<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once ("../view/header.php");?>
    <title>Procesar</title>
</head>
<body>
    
</body>
</html>
<?php
# Este archivo procesa las acciones de la  a tomar de cada ficha técnica

@session_start();
if (!isset($_SESSION['role'])) {
# Reedirigir al login si la sesion no existe
    header ("location: ../index.php");
}

if ($_SESSION['role'] === "SuperAdmin") {
# code...
}else {
# code...
    header("location: index.php");
}

if (isset($_POST['accion'])) {
    require_once ("../model/conexion.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $upc = filter_input(INPUT_POST, 'upc', FILTER_SANITIZE_NUMBER_INT);
    $accion = filter_input(INPUT_POST, 'accion', FILTER_SANITIZE_STRING);

    switch ($accion) {
       
        case 'actualizarDatos':
            $consulta = "UPDATE fichastecnicas SET
                fecha = '$fecha',
                estado = 'Contratado'
                WHERE id = '$id' ";
            $actualizado = mysqli_query($mysqli, $consulta);

            if ($actualizado) {
                echo '
                <script type="text/javascript">
                swal({
                    title: "Exito !",
                    text: "Registro actualizado exitosamente",
                    icon: "success",
                    button: "Aceptar",
                }).then(function() {
                    window.location = "../view/view.ficha.tecnica.php";
                });
                </script>
                
                ';
            }else {
                echo '
                <script type="text/javascript">
                swal({
                    title: "Error!",
                    text: "No se actualizó el registro",
                    icon: "warning",
                    button: "Aceptar",
                }).then(function() {
                    window.location = "../view/view.ficha.tecnica.php";
                });
                </script>
                
                ';
            }

            break;

        case 'borrar':
            $borrar ="DELETE FROM fichastecnicas WHERE id = $id ";
            $borrado = mysqli_query($mysqli, $borrar);

            if ($borrado) {
                echo '
                <script type="text/javascript">
                swal({
                    title: "Exito !",
                    text: "Registro borrado exitosamente",
                    icon: "success",
                    button: "Aceptar",
                }).then(function() {
                    window.location = "../view/view.ficha.tecnica.php";
                });
                </script>
                
                ';
            }else {
                echo '
                <script type="text/javascript">
                swal({
                    title: "Error!",
                    text: "No se borro el registro",
                    icon: "warning",
                    button: "Aceptar",
                }).then(function() {
                    window.location = "../view/view.ficha.tecnica.php";
                });
                </script>
                
                ';
            }

            break;

    }

}else {
    header("location: ../view/view.ficha.tecnica.php");
}
    

?>