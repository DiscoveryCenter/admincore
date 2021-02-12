<?php
# Este archivo arroja todas las hojas de vida disponibles

@session_start();

if (isset($_SESSION['status']) != "Activo" && (isset($_SESSION['role']) != "RRHH")) {
  # Si la sesion esta iniciada y el role es de Tecnologia muesta el contenido
  
  }else {
  
  # De lo contrario reedirecciona al dashboard correspondiente     
   #    @header("Location: index.php");
  
  }


 require_once "conexion.php";

# Consulta para mostrar resultados en la tabla  

$sql = "SELECT COUNT(*) id FROM solicitud WHERE estado = 'Leido' ";
$conteo = mysqli_query($mysqli, $sql);
$fila = mysqli_fetch_assoc($conteo);
$conteoFila = $fila["id"];


 $consulta = "SELECT
    id,
    nombre, 
    edad,
    hijos,
    puestoSolicitado,
    disponibilidad,
    ulCompania,
    ulFuncion,
    ulSalida,
    licencia,
    trabajoTemporal,
    fecha,
    estado,
    sueldo FROM solicitud WHERE estado = 'Leido' order by id desc LIMIT 500"; 



?>