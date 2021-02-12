<?php
# Este archivo muestra los datos de la hoja de vida de una persona

@session_start();

if ($_SESSION['role'] != 'RRHH') {
    # Reedirigir al login si la sesion no existe
    header ("location: ../view/index.php");
}

require_once "conexion.php";

if (!empty($_POST['submit'])) {
    
    $leido = filter_input(INPUT_POST, 'leido', FILTER_SANITIZE_STRING);

    if ($leido == 'Leido') {

        $registro = mysqli_real_escape_string($mysqli, $_POST['id']);
        $fecha = date("d-m-Y");
        $actualizar = "UPDATE solicitud SET fecha = '$fecha', estado = 'Leido'  WHERE id = '$registro' ";
        $actualizar = mysqli_query($mysqli, $actualizar);
    }

}else {
    header("location: ../");
}
        $registro = mysqli_real_escape_string($mysqli, $_POST['id']);



$consulta = "SELECT * FROM solicitud WHERE id = '$registro' ";

$mostrar = mysqli_query($mysqli, $consulta);
    $fila = mysqli_fetch_assoc($mostrar);

$id = $fila['id'];
$nombreCV = $fila['nombre'];
$cedula = $fila['cedula'];
$seguro = $fila['seguro'];
$direccion = $fila['direccion'];
$telefono = $fila['telefono'];
$nacimiento = $fila['nacimiento'];
$edad = $fila['edad'];
$hijos = $fila['hijos'];
$salud = $fila['salud'];
$conquienvive = $fila['conquienvive'];
$EmergenciaNombre = $fila['EmergenciaNombre'];
$EmergenciaParentesco = $fila['EmergenciaParentesco'];
$EmergenciaTelefono = $fila['EmergenciaTelefono'];
$colegio1 = $fila['colegio1'];
$colegio2 = $fila['colegio2'];
$colegio3 = $fila['colegio3'];
$colegio4 = $fila['colegio4'];
$grado1 = $fila['grado1'];
$grado2 = $fila['grado2'];
$grado3 = $fila['grado3'];
$grado4 = $fila['grado4'];
$titulo1 = $fila['titulo1'];
$titulo2 = $fila['titulo2'];
$titulo3 = $fila['titulo3'];
$titulo4 = $fila['titulo4'];
$referencia1 = $fila['referencia1'];
$referencia2 = $fila['referencia2'];
$referencia3 = $fila['referencia3'];
$rlugart1 = $fila['rlugart1'];
$rlugart2 = $fila['rlugart2'];
$rlugart3 = $fila['rlugart3'];
$referenciaTelefono1 = $fila['referenciaTelefono1'];
$referenciaTelefono2 = $fila['referenciaTelefono2'];
$referenciaTelefono3 = $fila['referenciaTelefono3'];
$equipoOficina = $fila['equipoOficina'];
$conoceAlguienEmpresa = $fila['conoceAlguienEmpresa'];
$parentescoConoceAlguienEmpresa = $fila['parentescoConoceAlguienEmpresa'];
$vehiculo = $fila['vehiculo'];
$licencia = $fila['licencia'];
$ulCompania = $fila['ulCompania'];
$ulTiempo = $fila['ulTiempo'];
$ulAnio = $fila['ulAnio'];
$ulFuncion = $fila['ulFuncion'];
$ulTelefonoRef = $fila['ulTelefonoRef'];
$ulJefe = $fila['ulJefe'];
$ulSalida = $fila['ulSalida'];
$peCompania = $fila['peCompania'];
$peTiempo = $fila['peTiempo'];
$peAnio = $fila['peAnio'];
$peFuncion = $fila['peFuncion'];
$peTelefonoRef = $fila['peTelefonoRef'];
$peJefe = $fila['peJefe'];
$peSalida = $fila['peSalida'];
$anteCompania = $fila['anteCompania'];
$anteTiempo = $fila['anteTiempo'];
$anteAnio = $fila['anteAnio'];
$anteFuncion = $fila['anteFuncion'];
$anteTelefonoRef = $fila['anteTelefonoRef'];
$anteJefe = $fila['anteJefe'];
$anteSalida = $fila['anteSalida'];
$turnoDisponibilidad = $fila['turnoDisponibilidad'];
$trabajoTemporal = $fila['trabajoTemporal'];
$puestoSolicitado = $fila['puestoSolicitado'];
$disponibilidad = $fila['disponibilidad'];
$sueldo = $fila['sueldo'];
$fecha = $fila['fecha'];

?>