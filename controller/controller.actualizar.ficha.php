
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validadcion</title>
    <script src="../build/js/sweetalert.js"></script>
</head>
<body>
    
</body>
</html>
<?php

@session_start();

    if ($_SESSION['role'] != 'SuperAdmin') {
        # Reedirigir al login si la sesion no existe
        header ("location: ../view/index.php");
    }

require_once ("../model/conexion.php");

# Valida el envio del formulario con los campos llenos.

$post = (isset($_POST['submit']) && !empty($_POST['submit'])) &&
(isset($_POST['id']) && !empty($_POST['id'])) &&
(isset($_POST['nombreProducto']) && !empty($_POST['nombreProducto'])) &&
(isset($_POST['codigoProducto']) && !empty($_POST['codigoProducto'])) &&
(isset($_POST['modeloProducto']) && !empty($_POST['modeloProducto'])) &&
(isset($_POST['estadoProducto']) && !empty($_POST['estadoProducto'])) &&
(isset($_POST['verificar']) && !empty($_POST['verificar'])) &&
(isset($_POST['solicitadoPor']) && !empty($_POST['solicitadoPor'])) ;

if ($post) {
    # Si todos los campos estan llenos procede a ejecutar el siguiente codigo
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $nombreProducto = filter_input(INPUT_POST, 'nombreProducto', FILTER_SANITIZE_STRING);
    $codigoProducto = str_replace(' ', '', $_POST['codigoProducto']);
    $codigoProducto = filter_input(INPUT_POST, 'codigoProducto', FILTER_SANITIZE_NUMBER_INT);
    $modeloProducto = filter_input(INPUT_POST, 'modeloProducto', FILTER_SANITIZE_STRING);
    $estadoProducto = filter_input(INPUT_POST, 'estadoProducto', FILTER_SANITIZE_STRING);
    $verificar = filter_input(INPUT_POST, 'verificar', FILTER_SANITIZE_STRING);
    $solicitadoPor = filter_input(INPUT_POST, 'solicitadoPor', FILTER_SANITIZE_STRING);

    $directorio = "../../fitec/fichas/";
    
        $archivo = $directorio.basename ($_FILES['archivo']['name']);
        $tipoArchivo = $_FILES['archivo']['type'];

            move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo);
            $nombreArchivo = @rename($archivo, "../../fitec/fichas/".$codigoProducto.".pdf");

            $consulta = "UPDATE fichastecnicas SET
                item = '$nombreProducto',
                upc = '$codigoProducto',
                modelo = '$modeloProducto',
                estado_contenido = '$estadoProducto',
                solicitado_por = '$solicitadoPor',
                archivo = '$codigoProducto.pdf'
                WHERE id = '$id';
            ";

            if (mysqli_query($mysqli, $consulta)){
                require_once ("../phpmailer/mail.actualizar.ficha.php");
                echo '
                <script type="text/javascript">
                    swal({
                        title: "Exito",
                        text: "Los datos fueron actualizados exitosamente",
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
                        title: "Error",
                        text: "El registro no fue completado",
                        icon: "warning",
                        button: "Aceptar",
                    }).then(function() {
                        window.location = "../view/view.ficha.tecnica.php";
                    });
                    </script>
                ';
            }


}else { # Muestra el alert si hay 
    echo '
    <script type="text/javascript">
        swal({
            title: "Error",
            text: "Debe llenar todos los campos",
            icon: "warning",
            button: "Aceptar",
        }).then(function() {
            window.location = "../view/view.ficha.tecnica.php";
        });
        </script>
    ';
}
?>