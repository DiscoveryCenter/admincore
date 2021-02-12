<?php
  require_once "header.php";
  @session_start();
  
  if ($_SESSION['role'] === "RRHH") {
    # code...
}else {
    # code...
    echo "Permisos no adecuados";
}


require_once "../model/listarcv.php";
require_once "../model/model.chart.cv.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet | Dashboard</title>
    <?php require_once "header.php";?> <!-- Header contiene los css-->
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
                    
                  <div class="x_content">
              <div class="col-md-6 col-sm-12">
                <canvas id="myChart"></canvas>
              </div>
              <div class="col-md-6 col-sm-12">
                <h3>Conteo General de hojas de vida</h3>
               <div class="table-responsive">
                 <table class="table">
                   <thead class="thead-dark">
                     <th>Estado</th>
                     <th>Conteo</th>
                   </thead>               
                   <tbody class="font-weight-bold">
                     <tr>
                       <td class="text-success">Nuevos</td>
                       <td><?php echo $conteoNuevos;?></td>
                     </tr>
                     <tr>
                       <td class="text-primary">Leídos</td>
                       <td><?php echo $conteoLeidos;?></td>
                     </tr>
                     <tr>
                       <td class="text-dark">Contratados</td>
                       <td><?php echo $conteoContratados;?></td>
                     </tr>
                     <tr>
                       <td class="text-danger">Eliminados</td>
                       <td><?php echo $conteoEliminados;?></td>
                     </tr>
                   </tbody>
                 </table>
               </div>
              </div>     
                  
                </div><!--./fin del x_panel-->
                
              </div>

              
             </div>

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
                  <table id="datatable-responsive" class="col-12 table dt-responsive nowrap collpased display" cellspacing="0" style="width: 100%;" width="100%">
                <thead class="thead-dark">
                  <tr class="text-capitalize">
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Hijos</th>
                    <th>Puesto</th>
                    <th>Disp. Inmediata</th>
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
                            $disponibilidad = $fila['disponibilidad'];
                            $licencia = $fila['licencia'];
                            $fecha = date("d-m-Y", strtotime($fila['fecha']));
                            $salario = $fila['sueldo'];
                    
                           echo "<tr>";

                            echo "<td class='text-capitalize'>{$id}</td>";
                            echo "<td class='text-capitalize'>{$nombre}</td>";
                            echo "<td>{$edad}</td>";
                            echo "<td maxlenght='2'>{$hijos}</td>";
                            echo "<td>{$puesto}</td>";
                            echo "<td>{$disponibilidad}</td>";
                            echo "<td class='text-uppercase'>{$licencia}</td>";
                            echo "<td>{$salario}</td>";
                            echo "<td>{$fecha}</td>";
                            echo
                             "<td>
                              <form action='hojadevida.php' method='post'>
                                <input hidden class='hidden' name='id' value='{$id}'>
                                <input hidden class='hidden' name='leido' value='Leido'>
                                <button type='submit' name='submit' value='submit' 
                                  data-toggle='tooltip' data-placement='bottom' title='Ver registro'class='btn btn-sm btn-outline-primary'>
                                  <i class='fas fa-eye'></i>
                                </button>
                              </form>
                            </td>
                            
                            <td>
                            <form class='form-row' action='../controller/controller.accion.php' method='POST'>
                              <input hidden class='hidden' name='id' value='{$id}'>                             
                              <button type='submit' name='accion' value='contratar'
                              data-toggle='tooltip' data-placement='bottom' title='Contratar' class='btn btn-sm btn-outline-success'>
                              <i class='fas fa-check'></i>
                              </button>
                              <button type='submit' name='accion' value='eliminar'
                                data-toggle='tooltip' data-placement='bottom' title='Eliminar'class='btn btn-sm btn-outline-danger'>
                                <i class='fas fa-trash'>
                              </i></button>
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


        
        <!-- /page content -->
     <div class="clearfix"></div>
<!-- footer -->
<?php require_once "footer.php"?>
<!-- ./footer -->

<script>
  $(document).ready(function() {
    $('#datatable-responsive').DataTable( {
        "order": "desc";
    } );
} );

</script>

<script>

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Nuevos', 'Leidos', 'Contratados', 'Eliminados'],
        datasets: [{
            label: '# of Votes',
            data: [<?php echo $conteoNuevos;?>,
                  <?php echo $conteoLeidos;?>,
                  <?php echo $conteoContratados;?>,
                  <?php echo $conteoEliminados;?>
                    ],

            backgroundColor: [
                'rgba(44, 192, 46, 0.2)',
                'rgba(39, 114, 222, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(224, 36, 39, 0.2)'
            ],
            borderColor: [
                'rgba(44, 192, 46, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(224, 36, 39, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

</body>
</html>