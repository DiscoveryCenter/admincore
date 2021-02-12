<?php

@session_start();

$role = $_SESSION['role'];

if (!isset($_SESSION['role'])) {
    # Reedirigir al login si la sesion no existe
     header ("location: ../");
}

# Dashboard dinamico para cada role

switch ($role) {
    case 'SuperAdmin':
        # code...
        header("location: view.dashboard.superadmin.php");

        break;

    case 'RRHH':
           # rrhhdashboard.php contenido
           header("location: view.rrhhdashboard.php");
            break;

    case 'Tecnologia':
            # code...
            require_once "TecnologiaDashboard.php";
            break;        

    case 'Agente':
        # code...
        echo "Soy el Dashboard del RRHH";
        break;
    default:
        # code...
        break;
}


?>