
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
require_once "header.php";
    @session_start();
        if (!isset($_SESSION['role'])) {
        # Reedirigir al login si la sesion no existe
         header ("location: ../index.php");
    }

    if ($_SESSION['role'] === "SuperAdmin") {
        # code...
    }
    else
    {
        # code...
        header("location: index.php");
    }
?>
    <title>Intranet | SuperAdmin</title>
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
                <div class="row" style="display: inline-block;">
                  <div class="col-md-12">
                    <div class="tile_count">
                    <div class="col-md-2 col-sm-6 tile_stats_count"  
                    data-toggle="tooltip" data-placement="top" title="Total de usuarios">
                      <span class="count_top"><i class="fa fa-user"></i> Usuarios </span>
                    <div class="count">2500</div>
                    <span class="count_bottom"><i class="green">4% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-6 tile_stats_count"
                    data-toggle="tooltip" data-placement="top" title="Total de estaciones de trabajo">
                    <span class="count_top"><i class="fa fa-laptop"></i> Estaciones </span>
                    <div class="count">123</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-6 tile_stats_count"
                    data-toggle="tooltip" data-placement="top" title="Total de licencias">
                    <span class="count_top"><i class="fas fa-file-alt"></i> Licencias</span>
                    <div class="count green">2,500</div>
                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-6 tile_stats_count"
                    data-toggle="tooltip" data-placement="top" title="Total de equipos de red">
                    <span class="count_top"><i class="fas fa-network-wired"></i> Equipo de red</span>
                    <div class="count">4,567</div>
                    <span class="count_bottom"><i class="red"><i class=""></i>12% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-6 tile_stats_count" 
                    data-toggle="tooltip" data-placement="top" title="Total de celulares">
                    <span class="count_top"><i class="fas fa-mobile-alt"></i> Celulares</span>
                    <div class="count">4,567</div>
                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                    </div>
                    
                    </div>
                    </div>
                  </div>
                </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel"> <!--inicio del panel-->
                  <div class="x_title">
                    <h2><i class="far fa-chart-bar"></i> Estadísticas</h2>
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
                      <div class="col-lg-3 col-md-3 col-sm-6  ">
                        <h4 class="font-weight">Equipo de redes</h4>
                        <canvas id="redes"></canvas> <!--Chart de usuarios-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  ">
                        <h4 class="font-weight">Estaciones de trabajo</h4>
                        <canvas id="Estaciones"></canvas> <!--Chart de usuarios-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  ">
                        <h4 class="font-weight">Licencias</h4>
                        <canvas id="Licencias"></canvas> <!--Chart de usuarios-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6  ">
                        <h4 class="font-weight">Celulares</h4>
                        <canvas id="Celulares"></canvas> <!--Chart de usuarios-->
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
                    <h2><i class="fas fa-users"></i> Usuarios | <i class="far fa-file"></i> Documentos </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"><!--Contenido segundo bloque-->
                  <div class="col-lg-6 col-md-6 col-sm-6  ">
                        <h4 class="font-weight"><i class="fa fa-user"></i> Usuarios</h4>
                        <canvas id="Usuarios" ></canvas> <!--Chart de usuarios-->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6  ">
                        <h4 class="font-weight"><i class="fas fa-file"></i> Documentos</h4>
                        <canvas id="Documentos" ></canvas> <!--Chart de usuarios-->
                    </div>
                  </div><!--Contenido segundo bloque-->     
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
                  <div class="x_content"><!--Contenido segundo bloque-->
                    <h1>Holis</h1>
                  </div><!--Contenido segundo bloque-->     
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

<!--charts de usuario -->
<script>
var ctx = document.getElementById('redes').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Nuevos', 'Leidos', 'Contratados', 'Eliminados'],
        datasets: [{
            label: '# of Votes',
            data: ['40', '21', '14', '34'
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
<!--Fin de charts de usuarios  -->

<!--charts de usuario -->
<script>
var ctx = document.getElementById('Estaciones').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Nuevos', 'Leidos', 'Contratados', 'Eliminados'],
        datasets: [{
            label: '# of Votes',
            data: ['40', '21', '14', '34'
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
<!--Fin de charts de usuarios  -->

<!--charts de usuario -->
<script>
var ctx = document.getElementById('Licencias').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Nuevos', 'Leidos', 'Contratados', 'Eliminados'],
        datasets: [{
            label: '',
            data: ['40', '21', '14', '34'
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
<!--Fin de charts de usuarios  -->

<!--charts de Celulares -->
<script>
var ctx = document.getElementById('Celulares').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Nuevos', 'Leidos', 'Contratados', 'Eliminados'],
        datasets: [{
            label: '# of Votes',
            data: ['40', '21', '14', '34'
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
<!--Fin de charts de celulares  -->

<!--charts de Usuarios -->
<script>
var ctx = document.getElementById('Usuarios').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['Administradores', 'RRHH', 'Tecnologia', 'Agentes'],
        datasets: [{
            label: 'Usuarios por categoría',
            data: ['40', '21', '14', '34'
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
<!--Fin de charts de usuarios  -->

<!--charts de Documentos -->
<script>
var ctx = document.getElementById('Documentos').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Fichas Técnicas', 'Solicitud de trabajo', 'Directorio'],
        datasets: [{
            label: 'Usuarios por categoría',
            data: ['40', '21', '14'
                    ],

            backgroundColor: [
                'rgba(44, 192, 46, 0.2)',
                'rgba(39, 114, 222, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(44, 192, 46, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
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
<!--Fin de charts de Documentos  -->

<!--Tool Tips bootstrap-->
<script> 
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<!--/Tool tips bootstrap-->

</body>
</html>