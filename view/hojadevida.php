<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de Vida</title>
    <?php 

    
  require_once "header.php";
  require_once "../model/mostrarcv.php";

  if ($_SESSION['role'] = 'RRHH' OR 'Administrador') {
    # Reedirigir al login si la sesion no existe
  }else{
    header ("location: ../view/index.php");
}

    ?> <!-- Header contiene los css-->

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
            <div class="page-title d-print-none">
              <div class="title_left">
                <h3>Hoja de vida </h3>
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

            <div class="row d-print-none">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2>Nombre del Solicitante: 
                      <span class="text-primary">
                        <?php echo "{$nombreCV} <span class='text-dark'>Edad: </span> 
                        <span class='text-primary'>{$edad}</span>";?>
                      </span>  
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="row"> <!--row wiget-->
<!-- Wiget hijos -->
                      <div class="animated flipInY col">
                        <div class="tile-stats">
                          <div class="icon d-print-none"><i class="fas fa-baby"></i>
                          </div>
                          <div class="count">Hijos</div>

                          <h3 class="text-danger"><?php echo "{$hijos}";?></h3>
                          <p>Cantidad de hijos.</p>
                        </div>
                      </div>
<!-- Wiget Salario -->
                      <div class="animated flipInY col ">
                        <div class="tile-stats">
                          <div class="icon d-print-none"><i class="fa fa-money-bill-alt"></i>
                          </div>
                          <div class="count">Salario</div>
                          <h3 class="text-success"><?php echo "{$sueldo}";?></h3>
                          <p>Salario pretendido.</p>
                        </div>
                      </div>
<!-- Wiget Disponibilidad -->
                      <div class="animated flipInY col ">
                        <div class="tile-stats">
                          <div class="icon d-print-none"><i class="fa fa-calendar"></i>
                          </div>
                          <div class="count">Disp.</div>

                          <h3 class="text-success"><?php echo "{$disponibilidad}";?></h3>
                          <p>Disponibilidad para trabajar.</p>
                        </div>
                      </div>
<!-- wiget Cargo -->
                      <div class="animated flipInY col ">
                        <div class="tile-stats">
                          <div class="icon d-print-none"><i class="fa fa-briefcase"></i>
                          </div>
                          <div class="count">Cargo</div>

                          <p class="text-primary font-weight-bold"><?php echo "{$puestoSolicitado}";?></p>
                          <p>Cargo al que se aplica.</p>
                        </div>
                      </div>
<!-- Wiget Contrato -->
                      <div class="animated flipInY col ">
                        <div class="tile-stats">
                          <div class="icon d-print-none"><i class="fas fa-file"></i>
                          </div>
                          <div class="count">Contrato</div>

                          <h3 class="text-dark text-capitalize"><?php echo "{$trabajoTemporal}";?></h3>
                          <p>Acepta contrato temporal.</p>
                        </div>
                      </div>
                    </div><!--./row wiget-->
                  </div>
                  </div>
                  
                </div><!--./fin del x_panel-->
              </div>
            </div>

              <div class="row"><!--Fila -->
              <div class="col-md-12 col-sm-12">
              <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2>Datos Generales</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Contenido del panel -->
                     <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Datos Generales</h5>
                          <p class="card-text">
                            <strong >NOMBRE:</strong> <span class="text-capitalize"><?php echo "{$nombreCV}";?></span> <br>
                            <strong>CÉDULA:</strong> <?php echo "{$cedula}";?><br/>
                            <strong>SEG.SOCIAL:</strong> <?php echo "{$seguro}";?><br>
                            <strong>DIRECCION ACTUAL:</strong> <?php ECHO "{$direccion}";?><br>
                            <strong>TELÉFONO:</strong> <?php echo "{$telefono}";?>
                          </p>
                          <hr>
                          <a href="tel:+507<?php echo $telefono;?>" class="btn btn-primary d-print-none" target="_blank" rel="noopener noreferrer"><i class="fa fa-phone-volume" ></i> Llamar</a>
                          <a href="https://wa.me/+507<?php echo $telefono;?>?text=Buenos+días <?php echo $nombreCV;?>+hemos+recibido+su+hoja+de+vida+en+Discovery+Center+Panamá+.+Estamos+interesados+en+coordinar+una+entrevista+con+usted." target="_blank" rel="noopener noreferrer" 
                          class="ml-5  btn btn-success d-print-none" ><i class="fab fa-whatsapp"></i> Chat</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Datos Adicionales</h5>
                          <strong>CONDICIÓN GENERAL DE SALUD: </strong><?php echo $salud;?><br>
                          <strong>ACTUALMENTE VIVE CON: </strong><?php echo $conquienvive;?><br>
                          <strong>EN CASO DE EMERGENCIA LLAMAR A : </strong><span class="text-capitalize"><?php echo $EmergenciaNombre;?></span><br>
                          <strong>PARENTESCO: </strong><?php echo $EmergenciaParentesco;?><br>
                          <strong>TELÉFONO: </strong><?php echo $EmergenciaTelefono;?><br>
                          <hr>
                          <strong class="d-print-none">Contactar en Caso de <span class="text-danger">Emergencia</span>: </strong>
                          <a href="tel:+507<?php echo $EmergenciaTelefono;?>" class="btn btn-primary d-print-none" target="_blank" rel="noopener noreferrer"><i class="fa fa-phone-volume" ></i> Llamar</a>
                          <a href="https://wa.me/+507<?php echo $EmergenciaTelefono?>" target="_blank" rel="noopener noreferrer"
                          class="ml-5  btn btn-success d-print-none" ><i class="fab fa-whatsapp"></i> Chat</a>
                        </div>
                      </div>
                    </div>
                    <!-- ./Contenido del panel -->
                  </div><!--./fin del x_panel-->
                 </div>
                </div>
              </div><!--Fin de la fila-->

                  <div class="d-none d-print-block"><!-- Esta tabla solo se muestra cuando se imprime-->
                    <table class="table text-center">
                        <th>Cantidad de hijos</th>
                        <th>Salario pretendido</th>
                        <th>Disponibilidad</th>
                        <th>Cargo solicitado</th>
                        <th>Acepta contrato Temporal</th>

                      <tr>
                        <td>Cantidad de hijos: <?php echo "{$hijos}";?></td>
                        <td>Salario pretendido: <?php echo "{$sueldo}";?></td>
                        <td>Disponibilidad: <?php echo "{$disponibilidad}";?></td>
                        <td>Cargo solicitado: <?php echo "{$puestoSolicitado}";?></td>
                        <td>Acepta contrato temporal: <?php echo "{$trabajoTemporal}";?></td>
                      </tr>
                    </table>
                  </div><!-- Esta tabla solo se muestra cuando se imprime-->
              <div class="row"><!--Fila -->
              <div class="col-md-12 col-sm-12">
              <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2>Formación Académica</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Contenido del panel -->
                    <div class="col">
                      <h5 class="bg-primary text-light text-center">Formación Académica</h5> <!-- Educación Universitaria-->
                      <table id="example" class="table table-hover" width="100%">
                        <thead>
                        <tr>
                          <th class="text-primary">Colegio / Lugar</th>
                          <th>Grado</th>
                          <th>Titulo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <th scope="row"><?php echo "{$colegio1}";?></th>
                          <td><?php echo "{$grado1}";?></td>
                          <td><?php echo "{$titulo1}";?></td>
                        </tr>
                        <tr>
                          <th scope="row"><?php echo "{$colegio2}";?></th>
                          <td><?php echo "{$grado2}";?></td>
                          <td><?php echo "{$titulo2}";?></td>
                        </tr>
                        <tr>
                          <th scope="row"><?php echo "{$colegio3}";?></th>
                          <td><?php echo "{$grado3}";?></td>
                          <td><?php echo "{$titulo3}";?></td>
                        </tr>
                        <tr>
                          <th scope="row"><?php echo "{$colegio4}";?></th>
                          <td><?php echo "{$grado4}";?></td>
                          <td><?php echo "{$titulo4}";?></td>
                        </tr>
                        </tbody>
                        </table>

                    </div>    
                    <!-- ./Contenido del panel -->
                  </div><!--./fin del x_panel-->
                 </div>
                </div>
              </div><!--Fin de la fila-->

              <div class="row"><!--Fila -->
              <div class="col-md-12 col-sm-12">
              <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2>Referencias Personales</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Contenido del panel -->
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Referencia 1</h5>
                            <strong >NOMBRE:</strong> <span class="text-capitalize"><?php echo "{$referencia1}";?></span> <br>
                            <strong>EMPRESA:</strong> <?php echo "{$rlugart1}";?><br/>
                            <strong>TELÉFONO</strong> <?php echo "{$referenciaTelefono1}";?><br>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Referencia 2</h5>
                            <strong >NOMBRE:</strong> <span class="text-capitalize"><?php echo "{$referencia2}";?></span> <br>
                            <strong>EMPRESA:</strong> <?php echo "{$rlugart2}";?><br/>
                            <strong>TELÉFONO</strong> <?php echo "{$referenciaTelefono2}";?><br>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Referencia 3</h5>
                            <strong>NOMBRE:</strong> <span class="text-capitalize"><?php echo "{$referencia3}";?></span> <br>
                            <strong>EMPRESA:</strong> <?php echo "{$rlugart3}";?><br/>
                            <strong>TELÉFONO</strong> <?php echo "{$referenciaTelefono3}";?><br>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ./Contenido del panel -->
                  </div><!--./fin del x_panel-->
                 </div>
                </div>
                
                <div class="d-none d-print-block">
                  <h3>Observaciónes:</h3><br>
                  <p>Para uso de oficina</p>
                </div>


              </div><!--Fin de la fila-->
              <div class="row"><!--Fila -->
              <div class="col-md-12 col-sm-12">
              <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2>Conocimientos | Experiencia Laboral</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Contenido del panel -->
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Conocimientos</h5>
                            <strong>EQUIPO DE OFICINA:</strong> <span class="text-capitalize"><?php echo "{$equipoOficina}";?></span><br>
                            <strong>CONOCE A ALGUIEN EN LA EMPRESA:</strong> <span class="text-capitalize"><?php echo "{$conoceAlguienEmpresa}";?></span><br>
                            <strong>PARENTESCO:</strong> <span class="text-capitalize"><?php echo "{$parentescoConoceAlguienEmpresa}";?></span><br>
                            <strong>EQUIPO RODANTE QUE UTILIZA:</strong> <span class="text-capitalize"><?php echo "{$vehiculo}";?></span><br>
                            <strong>TIPO DE LICENCIA:</strong> <span class="text-capitalize"><?php echo "{$licencia}";?></span><br>
                          </div>
                        </div>
                      </div>
                      
                     <div class="col">
                      <h5 class="bg-primary text-light text-center">Experiencia Laboral</h5> <!-- Educación Universitaria-->
                      <table id="example1" class="table table-hover" width="100%">
                        <thead>
                        <tr>
                          <th class="text-primary">Nombre Empresa</th>
                          <th>Tiempo Laborado</th>
                          <th>Año en el que laboró</th>
                          <th>Función / Cargo</th>
                          <th>Teléfono / Cel</th>
                          <th>Jefe Inmediato</th>
                          <th>Motivo de Salida</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                          <th scope="row"><?php echo "{$ulCompania}";?></th>
                          <td><?php echo "{$ulTiempo}";?></td>
                          <td><?php echo "{$ulAnio}";?></td>
                          <td><?php echo "{$ulFuncion}";?></td>
                          <td><?php echo "{$ulTelefonoRef}";?></td>
                          <td><?php echo "{$ulJefe}";?></td>
                          <td><?php echo "{$ulSalida}";?></td>
                        </tr>
                        <tr>
                          <th scope="row"><?php echo "{$peCompania}";?></th>
                          <td><?php echo "{$peTiempo}";?></td>
                          <td><?php echo "{$peAnio}";?></td>
                          <td><?php echo "{$peFuncion}";?></td>
                          <td><?php echo "{$peTelefonoRef}";?></td>
                          <td><?php echo "{$peJefe}";?></td>
                          <td><?php echo "{$peSalida}";?></td>
                        </tr>
                        <tr>
                          <th scope="row"><?php echo "{$anteCompania}";?></th>
                          <td><?php echo "{$anteTiempo}";?></td>
                          <td><?php echo "{$anteAnio}";?></td>
                          <td><?php echo "{$anteFuncion}";?></td>
                          <td><?php echo "{$anteTelefonoRef}";?></td>
                          <td><?php echo "{$anteJefe}";?></td>
                          <td><?php echo "{$anteSalida}";?></td>
                        </tr>
                        </tbody>
                        </table>

                    </div>
                    <!-- ./Contenido del panel -->
                  </div><!--./fin del x_panel-->
                 </div>
                </div>


                <div class="d-none d-print-block">
                  <h3>Observaciónes:</h3><br>
                  <p>Para uso de oficina</p>
                </div>
              </div><!--Fin de la fila-->
              
            </div>
          </div>
        </div>
        
        <!-- /page content -->
     <div class="clearfix"></div>
<!-- footer -->
<?php require_once "footer.php"?>
<!-- ./footer -->
<script type="text/javascript">
  $('#example').DataTable( {
    responsive: true
} );

$('#example1').DataTable( {
    responsive: true
} );
</script>

</body>
</html>