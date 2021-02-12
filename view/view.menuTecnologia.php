<?php
@session_start();
if (!isset($_SESSION['role'])) {
        # Reedirigir al login si la sesion existe
        header ("location: ../index.php");
     }
?>

 <!-- sidebar menu -->
 <div class="menu_section">
        <h3><?php echo "{$_SESSION['role']}"; ?></h3>
            <ul class="nav side-menu">
                <li class=""><a><i class="fas fa-home"></i> Hojas de vida </span></a><!-- Inicio del menu con encabezado-->
                    <ul class="nav child_menu" style="display: none;">
                        <!-- Lista del submenu-->
                            <li><a href="index.php">Sin leer</a></li>
                            <li><a href="view.leidas.php">Leídas</a></li>
                            <li><a href="view.contratado.php">Contratado</a></li>
                            <li><a href="view.eliminados.php">Eliminadas</a></li>
                        <!--./Fin de la lista del sub menu-->
                    </ul><!--./Fin del menu con el encabezado-->
            </ul>
    </div>
        <!--./sidebar menu-->