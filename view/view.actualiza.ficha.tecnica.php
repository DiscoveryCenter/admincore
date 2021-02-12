<?php
require_once "header.php";
@session_start();
if (!isset($_SESSION['role']) && $_SESSION['role'] != "SuperAdmin" ) {
# Reedirigir al login si la sesion no existe
 header ("location: ../index.php");
}

if(isset($_GET['id'])){
  require_once ("../model/conexion.php");
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

  $consulta = "SELECT * FROM fichastecnicas WHERE id = '$id' ";

  $mostrar = mysqli_query($mysqli, $consulta);
      $fila = mysqli_fetch_assoc($mostrar);
  

}else {
  header("location: ../view/view.ficha.tecnica.php");
}

?> 

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet | Dashboard</title>
    <?php ?> <!-- Header contiene los css-->
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
             
              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2><i class="fas fa-pen"></i> Actualizar ficha técnica</h2>
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
                  <div class="col-md-12">
                    <form name ="formulario" id="btn-submit" data-parsley-validate="" 
                    class="form-horizontal form-label-left" method="POST" action="../controller/controller.actualizar.ficha.php" enctype="multipart/form-data">
                    <h2 class="text text-center mb-5">Solo se adminten archivos en formato PDF.</h2>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nombreProducto" >Nombre del producto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input hidden type="number" name ="id" value="<?php echo $id;?>">
                          <input type="text"  value="<?php echo $fila['item'];?>" name="nombreProducto"
                          placeholder="<?php echo $fila['item'];?>" required="required" 
                          class="form-control parsley-succes text-capitalize" data-parsley-id="5">
                        </div>
                        </div>
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="codigoProducto">UPC/SKU <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" id="last-name" value="<?php echo $fila['upc'];?>" name="codigoProducto"
                           placeholder="Ej :078245586690" required class="form-control parsley-success" data-parsley-id="7">
                        </div>
                        </div>
                        <div class="item form-group">
                          <label for="modeloProducto" class="col-form-label col-md-3 col-sm-3 label-align text-capitalize">Modelo</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" value="<?php echo $fila['modelo'];?>" name="modeloProducto"
                            placeholder="Ej: SC-1100" class="form-control text-uppercase" type="text" data-parsley-id="9">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label for="estadoProducto" class="col-form-label col-md-3 col-sm-3 label-align">Estado del contenido:</label>
                          <div class="col-md-6 col-sm-6 ">
                          <select class="form-control" name="estadoProducto" id="cars">
             
                            <option class="text text-success" value="<?php echo $fila['estado_contenido'];?>"><?php echo $fila['estado_contenido'];?></option>
                            <option class="text text-success" value="Verificado">Verificado</option>
                            <option class="text text-danger" value="Sin verificar">Sin verificar</option>
                          </select>
                          </div>
                        </div>
                        <div class="item form-group">
                          <label for="solicitadoPor" class="col-form-label col-md-3 col-sm-3 label-align">Solicitado por:</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" value="<?php echo $fila['solicitado_por'];?>" name="solicitadoPor"
                             placeholder="Ej: Jefferson Espinoza" class="form-control text-capitalize" type="text" data-parsley-id="9">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Ficha Técnica PDF</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" type="file" value="" required name="archivo" class="form-control"  accept="pdf">
                          </div>

                        </div>
                        <label for="verificar" class="col-form-label col-md-3 col-sm-3 label-align">Verifiqué los datos</label>
                          <div class="col-md-6 col-sm-12 ">
                            <input class="float-left" id="middle-name" value="verificado" name="verificar" required
                             class="form-control" type="checkbox"  data-parsley-id="9">
                          </div>
                        </div>

                     
                        <div class="col-md-6 col-sm-6 offset-md-3"> 
                        <div class="ln_solid mb-3"></div>
                        <button class="btn btn-danger" type="reset"><i class="fas fa-times"></i> Reset</button>
                        <button type="submit" value="submit" name="submit"  class="btn btn-success">
                         <i class="fas fa-upload"></i> Cargar</button>
                      </div>
                    </form>
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