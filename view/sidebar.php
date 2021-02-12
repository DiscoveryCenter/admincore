<?php
@session_start();
if (!isset($_SESSION['role'])) {
    # Reedirigir al login si la sesion no existe
     header ("location: ../index.php");
}

echo '
    <!-- menu profile quick info -->
    <div class="profile clearfix d-print-none">
    <div class="profile_pic d-print-none">
        <img src="../vendors/images/msf.jpg" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info d-print-none">
        <span>Bienvenido,</span>
        <h2> '.$nombre.' '.$apellido.' </h2>
    </div>
    <div class="clearfix"></div>
    </div>
    <!-- /menu profile quick info -->

    <br />
';

switch ($role) {

    # Menú del super administrador
    case 'SuperAdmin': 
        # code...
      require_once "view.menu.superadmin.php";
        break;

    # Menu de recursos humanos
    case 'RRHH':
        # code...
          require_once "rrhhaside.php";
        break;
    # Menu de Tecnologia
    case 'Tecnologia':
        # code...
          require_once "view.menuTecnologia.php";
        break;    

    default:
        # code...
        break;
}

echo '

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
<a data-toggle="tooltip" data-placement="top" title="Settings">
  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="FullScreen">
  <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="Lock">
  <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="Cerrar" href="../controller/cerrarSession.php">
  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
</a>
</div>
<!-- /menu footer buttons -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav d-print-none">
<div class="nav_menu">
  <div class="nav toggle">
    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
  </div>
  <nav class="nav navbar-nav">
  <ul class=" navbar-right">
    <li class="nav-item dropdown open" style="padding-left: 15px;">
      <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
        <img src="../vendors/images/msf.jpg" alt=""> '.$nombre.' '.$apellido.'
      </a>
      <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
        <a class="text-danger dropdown-item"  href="../controller/cerrarSession.php"><i class="fas fa-power-off pull-right"></i> Salir</a>
      </div>
    </li>

  </ul>
</nav>
</div>
</div>
<!-- /top navigation -->

';

?>