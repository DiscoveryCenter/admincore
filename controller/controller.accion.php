<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../build/js/sweetalert.js"></script>
    <title>Acciones</title>
</head>
<body>
    
</body>
</html>
<?php

@session_start();

if(isset ($_POST['accion'])){

    if ($_SESSION['role'] != 'RRHH') {
        # Reedirigir al login si la sesion no existe
        header ("location: ../view/index.php");
    }

}else {
    header("location: ../view/index.php");
}

require_once '../model/conexion.php';

$accion = filter_input(INPUT_POST, 'accion', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$fecha = date("d-m-Y");



switch ($accion) {
    
    case 'contratar':

        $consulta = "UPDATE solicitud SET fecha = '$fecha', estado = 'Contratado' WHERE id = '$id' ";
        $contratar = mysqli_query($mysqli, $consulta);

        if($contratar){
            echo '
            <script type="text/javascript">
            swal({
                title: "Éxito !",
                text: "Registro actualizado a contratado.",
                icon: "success",
                button: "Aceptar",
            }).then(function() {
                window.location = "../view/index.php";
            });
            </script>
            ';

        }else{
            echo '
            <script type="text/javascript">
            swal({
                title: "Error !",
                text: "Registro no fue actualizado.",
                icon: "error",
                button: "Aceptar",
            }).then(function() {
                window.location = "../view/index.php";
            });
            </script>
            ';
        }

        break; 

    case 'eliminar':
        
        $consulta = "UPDATE solicitud SET fecha = '$fecha', estado = 'Eliminado' WHERE id = '$id' ";
        $borrar = mysqli_query($mysqli, $consulta);

        if($borrar){
            echo '
            <script type="text/javascript">
            swal({
                title: "Éxito !",
                text: "El registro fue eliminado.",
                icon: "success",
                button: "Aceptar",
            }).then(function() {
                window.location = "../view/index.php";
            });
            </script>
            ';

        }else{
            echo '
            <script type="text/javascript">
            swal({
                title: "Error!",
                text: "El registro no fue eliminado",
                icon: "error",
                button: "Aceptar",
            }).then(function() {
                window.location = "../view/index.php";
            });
            </script>
            ';
        }

        break;

    case 'restaurado':
    
        $consulta = "UPDATE solicitud SET fecha = '$fecha', estado = 'Nuevo' WHERE id = '$id' ";
        $restaurado = mysqli_query($mysqli, $consulta);

        if($restaurado){
            echo '
            <script type="text/javascript">
            swal({
                title: "Éxito !",
                text: "El registro restaurado.",
                icon: "success",
                button: "Aceptar",
            }).then(function() {
                window.location = "../view/index.php";
            });
            </script>
            ';

        }else{
            echo '
            <script type="text/javascript">
            swal({
                title: "Error !",
                text: "El registro no fue restaurado.",
                icon: "success",
                button: "Aceptar",
            }).then(function() {
                window.location = "../view/index.php";
            });
            </script>
            ';
        }

        break; 
    
    default:
        # code...
        break;
}