<?php
  @session_start();
    if ($_SESSION['role'] != 'RRHH') {
      # Reedirigir al login si la sesion no existe
      header ("location: ../view/index.php");
    }

require_once "../model/model.listar.leidas.php";

?>
     <!-- page content -->
     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
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
                    <h2>Hojas de vida leídas</h2>
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
                          <div class="icon"><i class="fa fa-search"></i>
                          </div>
                          <div class="count text-primary"><?php echo "{$conteoFila}";?></div>
                          <h3>Leídas</h3>
                          <p>Total de hojas de vida leídas.</p>
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
                  <table id="datatable-responsive" class="col-12 table dt-responsive nowrap collpased display" cellspacing="0" width="100%">
                <thead class="thead-dark">
                  <tr class="text-capitalize">
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Hijos</th>
                    <th>Puesto</th>
                    <th>Compañia</th>
                    <th>Disp. Inmediata</th>
                    <th>Últimno trabajo</th>
                    <th>Motivo de salida</th>
                    <th>Licencia</th>
                    <th>Salario</th>
                    <th>Fecha</th>
                    <th>Ver</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody class="table-hover">
                 

                  <?php 
                    $resultado = $mysqli -> query($consulta);
                    if ($resultado -> num_rows > 0) {
                    # Conteo
                        $contar = mysqli_num_rows($resultado);
                    # Recorrido    
                        while ( $fila = $resultado -> fetch_assoc()){
                            $id = $fila['id'];
                            $nombre = $fila['nombre'];
                            $edad = $fila['edad'];
                            $hijos = $fila['hijos'];
                            $puesto = $fila['puestoSolicitado'];
                            $compania = $fila['ulCompania'];
                            $disponibilidad = $fila['disponibilidad'];
                            $Ultrabajo = $fila['ulFuncion'];
                            $salida = $fila['ulSalida'];
                            $licencia = $fila['licencia'];
                            $fecha = date("d-m-Y", strtotime($fila['fecha']));
                            $salario = $fila['sueldo'];
                    
                           echo "<tr>";

                            echo "<td class='text-capitalize'>{$nombre}</td>";
                            echo "<td>{$edad}</td>";
                            echo "<td>{$hijos}</td>";
                            echo "<td>{$puesto}</td>";
                            echo "<td>{$compania}</td>";
                            echo "<td>{$disponibilidad}</td>";
                            echo "<td>{$Ultrabajo}</td>";
                            echo "<td>{$salida}</td>";
                            echo "<td class='text-uppercase'>{$licencia}</td>";
                            echo "<td>{$salario}</td>";
                            echo "<td>{$fecha}</td>";
                            echo "<td>
                            <form action='hojadevida.php' method='post'>
                              <input hidden class='hidden' name='id' value='{$id}'>
                              <button type='submit' name='submit' value='submit' 
                                data-toggle='tooltip' data-placement='bottom' title='Ver registro'class='btn btn-sm btn-outline-primary'>
                                <i class='fas fa-eye'></i>
                              </button>
                            </form>
                            </td>
                            <td>
                            <form action='../controller/controller.accion.php' method='POST'>
                              <input hidden class='hidden' name='id' value='{$id}'>
                              <button type='submit' name='accion' value='contratar'
                                data-toggle='tooltip' data-placement='bottom' title='Contratar' class='btn btn-sm btn-outline-success'>
                                <i class='fas fa-check'></i>
                              </button>
                              <button type='submit' name='accion' value='eliminar'
                                data-toggle='tooltip' data-placement='bottom' title='Eliminar' class='btn btn-sm btn-outline-danger'>
                                <i class='fas fa-trash'></i>
                              </button>
                            </form>
                            </td>";
                           echo "</tr>";
                    
                            } # fin del while
                    
                    } #Fin del if resultado
                  ?>
                </tbody>
              </table>
                </div><!--./fin del x_panel-->
              </div>
            </div>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->