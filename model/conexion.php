<?php
/* Archivo de conexion a la base de datos */        
$server = "localhost";
$user = "root";
$pass="";
$db = "iscovgf2_fitec";

$mysqli = new mysqli (
    $server,
    $user,
    $pass,
    $db
);
/*Verifica la conexión */
if (mysqli_connect_errno () ){
    printf ("Falló la conexión: %s\n", mysqli_connect_error () );
    exit ();
}

/* Cambiar el conjunto de caracteres a UTF8 */
if (!$mysqli -> set_charset ("UTF8") ){
    printf ("Error cargando el conjuto de caracteres utf8: %s\n", $mysqli -> error);
        exit ();
    }

?>