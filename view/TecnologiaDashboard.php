<?php
@session_start();
if (!isset($_SESSION['status'])) {
        # Reedirigir al login si la sesion existe
        header ("location: ../index.php");
     }
?>
     <!-- page content -->
     <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard</h3>
              </div>


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
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
                  <div class="row" style="">
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-file"></i>
                          </div>
                          <div class="count text-success"><?php echo "{$conteoFila}";?></div>

                          <h3>Hojas de vida</h3>
                          <p>Total de hojas de vida recibidas.</p>
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
                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Licencia</th>
                    <th>Puesto</th>
                    <th>Disponibilidad</th>
                    <th>Trabajo temporal</th>
                    <th>Salario</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                 

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
                            $licencia = $fila['licencia'];
                            $puesto = $fila['puestoSolicitado'];
                            $disponibilidad = $fila['turnoDisponibilidad'];
                            $trabajoTemporal = $fila['trabajoTemporal'];
                            $fecha = date("d/m/Y", strtotime($fila['fecha']));
                            $salario = $fila['sueldo'];
                    
                           echo "<tr>";

                            echo "<td>{$nombre}</td>";
                            echo "<td>{$edad}</td>";
                            echo "<td class='text-uppercase'>{$licencia}</td>";
                            echo "<td>{$puesto}</td>";
                            echo "<td>{$disponibilidad}</td>";
                            echo "<td>{$trabajoTemporal}</td>";
                            echo "<td>{$salario}</td>";
                            echo "<td>{$fecha}</td>";
                            echo "<td>
                            <form action='hojadevida.php' method='post'>
                              <input hidden class='hidden' name='id' value='{$id}'>
                              <button type='submit' name='submit' value='submit' class='btn btn-sm btn-outline-primary'>Ver</button>
                            </form>
                            </td>";
                           echo "</tr>";
                    
                            } # fin del while
                    
                    } #Fin del if resultadó
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

        <script type="text/javascript">
          $('#datatable-responsive').dataTable( {
            "ordering": false
          } );
        </script>