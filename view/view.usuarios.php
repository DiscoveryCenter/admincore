<?php 
require_once "header.php";

    @session_start();
        if (!isset($_SESSION['role'])) {
        # Reedirigir al login si la sesion no existe
         header ("location: ../index.php");
    }

    if ($_SESSION['role'] === "SuperAdmin") {
        # code...
    }else {
        # code...
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet | Dashboard</title>
</head>

<body class="nav-md">

    <!-- nav -->
    <div class="container body">
<div class="main_container">
  <div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.php" class="site_title">Intranet Discovery</span></a>
      </div>

      <div class="clearfix"></div>

    <?php require_once "sidebar.php";?>
 <!-- page content -->
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Gestión de usuarios</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar..."
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2>Usuarios</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="row" style="">
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-file"></i>
                          </div>
                          <div class="count text-success">12</div>

                          <h3>Hojas de vida</h3>
                          <p>Total de hojas de vida recibidas.</p> <br>
                          <button class="btn btn-outline-success btn-sm ml-2">ver</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!--./fin del x_panel-->
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
              <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2>Hojas de vida</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                  
                </div><!--./fin del x_panel-->
              </div>
            </div>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
     <div class="clearfix"></div>
<!-- footer -->
<?php require_once "footer.php"?>
<!-- ./footer -->
</body>
</html>