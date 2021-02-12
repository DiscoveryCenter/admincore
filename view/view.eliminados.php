<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intranet | Dashboard</title>
    <?php  require_once "header.php";
    
    if ($_SESSION['role'] == 'RRHH' OR $_SESSION['role'] == 'SuperAdmin') {
      # Reedirigir al login si la sesion no existe
    }else{
      header ("location: ../view/index.php");
    }
    ?>
    
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

    <?php  require_once "sidebar.php";?>

     <!-- page content -->
      <?php  require_once "../controller/controller.listar.eliminados.php";?>
     <!-- /page content -->

    <!-- footer -->
    <?php require_once "footer.php"?>
    <!-- ./footer -->

<script type="text/javascript">
  $('#example').DataTable( {
    responsive: true
} );

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

</body>
</html>