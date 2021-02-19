<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../build/js/sweetalert.js"></script>
    <title>Validación</title>
</head>
<body>
    
</body>
</html>
<?php
    require_once '../model/conexion.php';

ini_set ("session.cookie_httponly", TRUE);

# Formulario anti CSRF
session_start();
$_SESSION['csrf'];

# Verifica que todos los campos sean enviados y no esten vacios
$csrf = $_POST['csrf'];
$csrfSession = $_SESSION['csrf'];

if ($csrf === $csrfSession) {
    # S´si eñ token es valido sigue ejecutando el código

}else{
    header("../");
}

# Valida el envio del formulario con los campos llenos.

    $post = (isset($_POST['submit']) && !empty($_POST['submit'])) &&
            (isset($_POST['usuario']) && !empty($_POST['usuario'])) &&
            (isset($_POST['password']) && !empty($_POST['password']));

# Si los campos están llenos ejecuta es siguente código

    if ($post) {
    # Sanitizar los datos.

    $usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

# Comparar registros con la base de datos 

    $consulta= "SELECT nombreUsuario, nombre, apellido, password, role, status FROM usuarios 
            WHERE nombreUsuario = '$usuario' and status = 'Activo' ";
# Verifica que el usuario exista 
    $resultado = mysqli_query($mysqli, $consulta);
    $numerar = mysqli_num_rows($resultado);
    if ($numerar == 1) {
        while ($row = mysqli_fetch_assoc($resultado)){
            if(password_verify($password, $row['password'])){

# Si el usuario existe y todo esta bien crea las sessiones y reedirige al dashboard
                $_SESSION['usuario'] = $row['nombreUsuario'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['apellido'] = $row['apellido'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['status'] = $row['status'];
                
                header('location: ../view/index.php');

                #header('location: ../view/index.php');
                
            }else {
# Si la contraseña esta erronea reedirigir a la pagina de error y luego al login

            echo '
            <script type="text/javascript">
            swal({
                title: "Error de credenciales !",
                text: "Creedenciales incorrectas o Perfil desactivado",
                icon: "error",
                button: "Aceptar",
            }).then(function() {
                window.location = "../index.php";
            });
            </script>
            ';

                #header("location: ../view/errorLogin.php");
            }
        }
    }else {
# Si el usuario no existe  reedirigir a la pagina de error y luego al login

        echo '
        <script type="text/javascript">
        swal({
            title: "Error de credenciales !",
            text: "Creedenciales incorrectas o Perfil desactivado",
            icon: "error",
            button: "Aceptar",
        }).then(function() {
            window.location = "../index.php";
        });
        </script>
';
    }
    }else {
# Si el formulario no fue enviado por metodo
        header("location: ../");
}
  
?>