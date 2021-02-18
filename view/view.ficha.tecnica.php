<?php
  require_once "header.php";
    @session_start();
    if (!isset($_SESSION['role']) && $_SESSION['role'] != "SuperAdmin" ) {
      # Reedirigir al login si la sesion no existe
       header ("location: ../index.php");
      }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet | Dashboard</title>
    <?php ?> <!-- Header contiene los css-->
    <script src="../build/js/sweetalert.js"></script>
</head>

<body class="nav-md">

    <!-- nav -->
    <div class="container body">
<div class="main_container">
  <div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="index.php" class="site_title">Intranet Discovery</a>
      </div>

      <div class="clearfix"></div>

    <?php require_once "sidebar.php";?>
 <!-- page content -->
 <div class="col-md-10 offset-md-2" role="">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Fichas técnicas</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2 >Agregar ficha técnica </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                   <div class="col-md-12">
                    <form name ="formulario" id="btn-submit" data-parsley-validate="" 
                    class="form-horizontal form-label-left" method="POST" action="../controller/controller.agregarficha.php" enctype="multipart/form-data">
                    <h2 class="text text-center mb-5">Solo se adminten archivos en formato PDF.</h2>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nombreProducto" >Nombre del producto <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="text"  value="" name="nombreProducto"
                          placeholder="Ej: Botas de pvc blancas con suela amarilla" required="required" 
                          class="form-control parsley-succes text-capitalize" data-parsley-id="5">
                        </div>
                        </div>
                        <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="codigoProducto">UPC/SKU <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="number" id="last-name" value="" name="codigoProducto"
                           placeholder="Ej :078245586690" required class="form-control parsley-success" data-parsley-id="7">
                        </div>
                        </div>
                        <div class="item form-group">
                          <label for="modeloProducto" class="col-form-label col-md-3 col-sm-3 label-align text-capitalize">Modelo</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" value="" name="modeloProducto"
                            placeholder="Ej: SC-1100" class="form-control text-uppercase" type="text" data-parsley-id="9">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label for="estadoProducto" class="col-form-label col-md-3 col-sm-3 label-align">Estado del contenido:</label>
                          <div class="col-md-6 col-sm-6 ">
                          <select class="form-control" name="estadoProducto" id="cars">
                            <option>Seleccionar</option>
                            <option class="text text-success" value="Verificado">Verificado</option>
                            <option class="text text-danger" value="Sin verificar">Sin verificar</option>
                          </select>
                          </div>
                        </div>
                        <div class="item form-group">
                          <label for="solicitadoPor" class="col-form-label col-md-3 col-sm-3 label-align">Solicitado por:</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" value="" name="solicitadoPor"
                             placeholder="Ej: Jefferson Espinoza" class="form-control text-capitalize" type="text" data-parsley-id="9">
                          </div>
                        </div>
                        <div class="item form-group">
                          <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Ficha Técnica PDF</label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="middle-name" value="" name="archivo" required class="form-control" type="file" accept="pdf">
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
                   </div>
                   </div>
                  </div>
                </div><!--./fin del x_panel-->
              </div>
   

            <div class="row">
              <div class="col-md-12 col-sm-12">
              <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2>Fichas técnicas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Inicio del contenido -->
                    <form class="form-inline mb-3" action="" method="POST">
                      <input class="form-control" type="text" name="ficha" value="" required placeholder="Busqueda">
                      <button class="form-control ml-3 btn btn-success" type="submit" name="submit"> Buscar </button>
                    </form> 
                  <table id="example" 
                   class="table table-hover " cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>UPC</th>
                        <th>Modelo</th>
                        <th>Solicitado por:</th>
                        <th>Estado del contenido:</th>
                        <th>Acciones</th>
        
                        
                    </tr>
                </thead>
                <tbody>

                    <?php
                    require_once ("../model/conexion.php");
                      if (isset($_POST['submit'])) {

                        $ficha = filter_input(INPUT_POST, 'ficha', FILTER_SANITIZE_STRING);
                        echo"<h3 class=''>Búsqueda para: {$ficha} </h3>";

                        $busqueda = "SELECT * FROM fichastecnicas WHERE 
                        item LIKE '%$ficha%' OR  
                        upc LIKE '%$ficha%' OR
                        modelo LIKE '%$ficha%'
                         ORDER BY id DESC LIMIT 1000";
                            $resultado = mysqli_query($mysqli, $busqueda);
                        while($fila = mysqli_fetch_array($resultado)){
                          echo "
                          <tr>
                            <td>{$fila['item']}</td>
                            <td> {$fila['upc']}</td>
                            <td> {$fila['modelo']}</td>
                            <td> {$fila['solicitado_por']}</td>
             
                            ";
                            if($fila['estado_contenido'] === "Verificado"){
                              echo "<td>
                                      <span class='badge badge-success'>
                                          {$fila['estado_contenido']}
                                      </span>    
                                  </td>";
                             }else{
                              echo "<td>
                                      <span class='badge badge-danger pulsingButton' data-toggle='tooltip' data-placement='top' 
                                      title='El contenido no ha sido verificado por el usuario que solicito la ficha técnica.'>
                                       {$fila['estado_contenido']}
                                      </span>    
                                   </td>";
                             }

                          echo "
                            <td>Acciones</td>
                          </tr>
                          ";   
                        }

                      }else {
                        echo"<h3> Mostrando los últimos mil registros </h3>";

                        $busqueda = "SELECT * FROM fichastecnicas 
                                     ORDER BY id DESC LIMIT 1000";

                            $resultado = mysqli_query($mysqli, $busqueda);
                              while($fila = mysqli_fetch_array($resultado)){
                              
                                echo "
                          <tr>
                            <td>{$fila['item']}</td>
                            <td> {$fila['upc']}</td>
                            <td> {$fila['modelo']}</td>
                            <td> {$fila['solicitado_por']}</td>
                   
                            ";
                            if($fila['estado_contenido'] === "Verificado"){
                              echo "<td>
                              <span class='badge badge-success' data-toggle='tooltip' data-placement='top' 
                              title='El contenido ferificado por: {$fila['solicitado_por']}'>
                                          {$fila['estado_contenido']}
                                      </span>    
                                  </td>";
                             }else{
                              echo "<td>
                                      <span class='badge badge-danger pulsingButton' data-toggle='tooltip' data-placement='top' 
                                      title='El contenido no ha sido verificado por el usuario que solicito la ficha técnica.'>
                                       {$fila['estado_contenido']}
                                      </span>    
                                   </td>";
                             }

                          echo "
                          <td>
                             <form class='form-inline' action='../controller/controller.acciones.fichas.php' method='POST'>
                             <span class='' data-toggle='tooltip' data-placement='top' 
                             title='Ver'>
                              <a class=' btn btn-outline-primary btn-sm' href='https://discoverycenterpa.net/fitec/fichas/{$fila['archivo']}'
                                target='_blank'rel='noopener noreferrer'>
                                  <i class='fas fa-eye'></i>
                              </a>
                              </span>

                              <span class='' data-toggle='tooltip' data-placement='top' 
                              title='Actualizar'>
                              <a class=' btn btn-outline-success btn-sm' 
                              href='view.actualiza.ficha.tecnica.php?id={$fila['id']}'>
                                <i class='fas fa-redo'></i>
                            </a>
                            </span>

                            <span class='' data-toggle='tooltip' data-placement='top' 
                            title='Borrar'>
                                <button class='btn btn-outline-danger btn-sm' type='submit' name='accion' value='borrar'>
                                  <i class='far fa-trash-alt'></i>        
                                </button>
                             </span>

                              </form>

                             </td>
                          </tr>
                          ";   

                            } # Fin del while
                      }
                    ?>
                                    </tbody>
                <tfoot>
                    <tr>
                        <th>Item</th>
                        <th>UPC</th>
                        <th>Modelo</th>
                        <th>Solicitado por:</th>
                        <th>Estado del contenido:</th>
                        <th>Acciones</th>
                       

                    </tr>
                </tfoot>
            </table>
            </div>
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

<!-- Datatable -->
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true
        });
    } );  
    
    </script>
<!-- Fin Data table -->
</body>
</html>