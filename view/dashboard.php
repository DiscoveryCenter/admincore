<?php

@session_start();

if (!isset($_SESSION['role'])) {
    # Reedirigir al login si la sesion no existe
     header ("location: ../");
}

# Dashboard dinamico para cada role

switch ($role) {
    case 'SuperAdmin':
        # code...
        header("location: /view.dashboard.superadmin.php");

        break;

    case 'RRHH':
           # rrhhdashboard.php contenido
           require_once "rrhhdashboard.php";
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